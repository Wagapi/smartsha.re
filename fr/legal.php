<?php
include ($_SERVER["DOCUMENT_ROOT"]."/wgp/wgp.header.php");
if(!empty($_SESSION['session'])){
	$session = unserialize($_SESSION['session']);
	$login = $session->agent->get_login();
}
?>

<!DOCTYPE html>
<html lang="fr"><head>
    <meta charset="utf-8">
    <title>Mentions légales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">

  <style type="text/css"></style>
  <style type="text/css">.holderjs-fluid {font-size:16px;font-weight:bold;text-align:center;font-family:sans-serif;border-collapse:collapse;border:0;vertical-align:middle;margin:0}</style>
  <style type="text/css">
	.row-rest {
		margin-top: 5px;
		margin-bottom: 5px;
		}
</style>


<?php include ("helper/google-analytics.php"); ?>
  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true">

      <!-- Navbar
    ================================================== -->
  <?php include ("helper/navbar.php"); ?>
	<div class="container">
		<p style="margin-top:40px">
			<h1>Mentions légales</h1>
			<ul>
				<li>
					<h3 class="wgp-color">SmartShare</h3>
					<p style="text-align: justify;">
					SmartShare est un service développé et opéré par la société Wagapi - <a href="http://www.wagapi.com">www.wagapi.com</a>	
					</p>
					<p style="text-align: justify;">
					L'utilisation de SmartShare est soumise à l'acceptation des conditions d'utilisation stipulées ci-après.
					</p>					
					
				</li>				
				<li>
					<h3 class="wgp-color">Conditions d'utilisation</h3>
					<p style="text-align: justify;">	
					Dans le cadre de ses activités, Wagapi propose un accès gratuit, sous certaines conditions, à tout ou partie de ses services.
					Wagapi fournit ces services ["services"] sous les conditions d'utilisation suivantes. Ces conditions d'utilisations sont susceptibles d'être mises à jour sans avertissement préalable. 
					En utilisant les services mis à disposition par Wagapi, vous acceptez de vous conformer aux présentes règles d'utilisation.
					</p>
					<h4 class="wgp-color">Droit d'utilisation des services</h4>
					<p style="text-align: justify;">
					L'utilisation gratuite des services mis à disposition par Wagapi est possible dans le cadre d'une utilisation non-commerciale. Pour une utilisation commerciale, merci de nous contacter à contact@wagapi.com.
					Le droit d'utilisation ne confère aucune licence ou transfert de propriété concernant le code informatique permettant le fonctionnement des services, qu'il s'agit des programmes situé en amont, côté serveur, ou en aval, chez le client.
					</p>
					<h4 class="wgp-color">Informations stockées et partagées</h4>
					<p style="text-align: justify;">
					Les informations et documents stockées le sont sous votre seule responsabilité. Avant de stocker et partager des informations, vous devez vous assurer que vous êtes légalement habilité à le faire.
					</p>
					<h4 class="wgp-color">Clause de non-responsabilité</h4>
					<p style="text-align: justify;">
					Tout le contenu et le matériel sur ce site Web vous sont fournis «en l'état» sans garantie d'aucune sorte, expresse ou implicite, y compris, mais sans s'y limiter, les garanties de qualité marchande et d'adéquation à un usage particulier, qui sont expressément rejetée. Wagapi n'aura aucune responsabilité pour tout dommage à votre système informatique, perte ou corruption de données, ou autres dommages résultant de votre accès ou utilisation des Services.
					
					</p>
					<p style="text-align: justify;">
					Ni Wagapi ni aucun de ses dirigeants, administrateurs, employés, agents, consultants oufournisseurs de services tiers ne pourront être tenus pour responsables pour les pertes, blessures, dommages, coûts, dépenses ou réclamations causés par, découlant de ou liés à l'utilisation ou l'incapacité d'utiliser ces services, y compris mais non limité aux dommages directs, indirects, fortuits, punitifs et consécutifs, même si Wagapi est expressément informé de la possibilité de tels dommages. 
					</p>
					<h4 class="wgp-color">Mise à jour des conditions d'utilisation</h4>
					<p style="text-align: justify;">
					Wagapi peut apporter des modifications à ces conditions d'utilisation de temps à autre. Lorsque des modifications sont apportées, une nouvelle copie de ces conditions d'utilisation sera disponibles sur cette page. Vous comprenez et acceptez que si vous utilisez nos services après la date à laquelle les présentes Conditions d'utilisation ont changé, ceci vaudra acceptation des nouvelles conditions d'utilisation.
					</p>
				</li>				
				
				<li>
					<h3 class="wgp-color">Contact</h3>
					<p style="text-align: justify;">	
					Toute demande est à adresser à l'adresse suivante : contact@wagapi.com
					</p>	
				</li>

			</ul>	
		</p>
	</div>

      <!-- Footer
    ================================================== -->
  <?php include ("helper/footer.php"); ?>



  

</body></html>