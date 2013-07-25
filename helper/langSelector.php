  <?php
	$langs=array('fr','en');
	if(isset($_GET['lang'])){
		$lang = $_GET['lang'];
	}else{
		//Default language
		$lang = 'en';
		//We check if there is any explicit user preference
		if (array_key_exists('HTTP_ACCEPT_LANGUAGE',$_SERVER)){
			$lang_pref = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
			if(!empty($lang_pref)){
				$lang = substr($lang_pref[0],0,2);
			}
		}
		//We match the preference to existing languages
		if($lang=='fr' || $lang=='de'){
			//$lang='fr';
		}else{
			$lang='en';
		}
	}

	$serverName = "http://smartsha.re";
	
 function get_path_info()
{	
	global $serverName;
	return $serverName;
	//unused
    if( ! array_key_exists('PATH_INFO', $_SERVER) )
    {
		$path_parts = pathinfo($_SERVER['PHP_SELF']);
		return $path_parts['dirname'];    
    }
    else
    {
        return trim($_SERVER['PATH_INFO'], '/');
    }
}
 	
?>
