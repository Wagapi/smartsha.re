
<!DOCTYPE html>
<html lang="fr"><head>
    <meta charset="utf-8">
    <title>Smartshare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Presentation de SmartShare, un système d'envoi de documents volumineux pour Outlook.">
    <meta name="author" content="Wagapi">
	<meta NAME="keywords" content="outlook,addin,plugin,lourds,volumineux,fichier,document,photos,vidéos,partager,envoyer,gratuit,outil,wagapi">

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
	.td-char {
		text-align:center;
	}
ul.ok
{
list-style-type: none;
padding: 0px;
margin: 0px;
}
ul.ok li
{
background-image: url(./assets/png/glyphicons_206_ok_2.png);
background-repeat: no-repeat;
background-position: 0px 5px; 
padding-left: 30px; 
padding-top:5px;
font-weight:900;
}	
	
</style>


<?php include ("helper/google-analytics.php"); ?>
  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true">

      <!-- Navbar
    ================================================== -->
  <?php include ($lang."/helper/navbar.php"); ?>


<div class="jumbotron subhead">
  <div class="container">
	<div class="row">
		<div class="span7">
			<h1>Smartsha.re</h1>
			<p>Envoyez des gigaoctets de photos, vidéos et documents sans quitter Outlook !</p>		
		</div>
		<div class="span4 offset1" style="margin-top:40px">
			<a href="https://www.wagapi.com/pub/smartshare/last/setup.exe" class="btn btn-primary btn-large" >Cliquez ici pour télécharger et installer la version gratuite !</a>
		</div>
		<!-- Navbar
		<div class="span5" >
			<div style="margin:0 auto; text-align:center;">
				<iframe style="max-width:100%;"  src="http://www.youtube.com/embed/cb3sq7LNzf4" frameborder="0" allowfullscreen=""></iframe>	
			</div>
		</div>	
		-->
	</div>
    <ul class="masthead-links">
      <li>
        Version 1.0
      </li>
	  <li>
		Compatible avec Microsoft &#174; Outlook 2007/2010/2013
	  </li>
    </ul>
  </div>
</div>

<div class="container" >

  <div class="marketing">
 <!--
					<p>
						<div class="row">					
							<div class="span4 offset4">
							<a href="/pub/smartshare/SmartShareforMSO2010.zip" class="btn btn-primary btn-large" >Click here to download and install the free version !</a>
							</div>
						
						</div>	
					</p>	-->	
        <!--     <div class="tabbable" style="margin-bottom: 18px;">
              <ul class="nav nav-tabs">
			  <li class="active"><a href="#tab0" data-toggle="tab">Introduction</a></li>
                <li><a href="#tab1" data-toggle="tab">Presentation</a></li>
                <li><a href="#tab2" data-toggle="tab">Plans and pricing</a></li>
              </ul>
              <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;"> -->	
    <!-- First tab
    ================================================== -->			  
             <!--   <div class="tab-pane active" id="tab0"> -->	
			 <div class="media" style="padding-top:20px;"></div>
					<div class="media">
									<a class="pull-left" href="#">
										<img class="media-object" style="width: 128px;" src="./assets/img/doc-email.png">
									</a>
									<div class="media-body">
										<h2>Avec SmartShare et Outlook, vous pouvez envoyer par email vos documents les plus lourds !</h2>
										<p class="marketing-byline">SmartShare conjugue la puissance du cloud et la simplicité du mail.</p>
									</div>
					</div>
					<div class="row">
						<div class="span8 offset2">
							<hr class="bs-docs-separator">
						</div>						  
					</div>	
					<div class="row">
						<div class="span2">
							<h4>Ils nous font confiance.</h4>
						</div>
											
						<?php include ("helper/customers.php"); ?>
					</div>	
					<div class="row">
						<div class="span8 offset2">
							<hr class="bs-docs-separator">
						</div>						  
					</div>						
					<div class="row">
					  <div class="span4">
						<h4>Economisez du temps et de l'argent</h4>
						<p>
						L'envoi par mail de documents lourds est habituemment un casse-tête. Avec SmartShare, vous envoyez une vidéo de 1 Go en quelques secondes, sans quitter Outlook et sans changer vos habitudes.
						</p>
					  </div>
					  <div class="span4">
						<h4>Gardez le contrôle de vos documents</h4>
						<p>Avec Smartshare, plus besoin d'éparpiller vos documents à droite et à gauche sur des espaces partagés.</p>
					  </div>
					  <div class="span4">
						<h4>Profitez d'un système simple et bien pensé</h4>
						<p>Smartshare s'intègre parfaitement à Outlook et s'installe en quelques secondes, que vous soyez un particulier, une PME ou une grande entreprise.
						
						</p>
					  </div>
					</div>
				
              <!--  </div> -->	
    <!-- Second tab
    ================================================== -->				
			
					<div class="row">
						<div class="span12">					
							<img src="./assets/img/ui1.png" class="img-polaroid">
						</div>						  
					</div>		
	<!-- 				
					<div class="row">
						<div class="span8 offset2">
							<hr class="bs-docs-separator">
						</div>						  
					</div>				
					<div class="row">
						<div class="span2 offset2">
							<h4 style="text-align:justify">New features for you emails</h4>
						</div>	
						<div class="span6">
							<ul style="text-align:justify" class="ok">
								<li class="ok">Send heavy documents in a glimpse (up to 4Gb)</li>
								<li class="ok">Give access to hundreds of documents with a single click</li>
								<li class="ok">Secure and protect shared resources with authentification based accesses</li>
							</ul>								
							
						</div>		
					</div>	
					<div class="row">
						<div class="span8 offset2">
							<hr class="bs-docs-separator">
						</div>						  
					</div>
					<div class="row">
						<div class="span2 offset2">
							<h4 style="text-align:justify">Along with several benefits
						</div>						
						<div class="span6">
							<ul style="text-align:justify" class="ok">
								<li>Save gigabytes of space in the mailbox and significant time for the user</li>
								<li>Get better control over data exchanged with external entities</li>
								<li>Save bandwidth and time thanks to caching mechanisms</li>
							</ul>								
							</h4>
						</div>
						
					</div>
					<div class="row">
						<div class="span8 offset2">
							<hr class="bs-docs-separator">
						</div>						  
					</div>
					<div class="row">
						<div class="span2 offset2">
						<h4 style="text-align:justify" >Designed for simplicity</h4>
					
						</div>	
						<div class="span6">
							<ul style="text-align:justify" class="ok">
								<li>SmartShare is seamlessly integrated in your messaging system.</li>
								<li>Standard secured URLs give access to shared resources to avoid attaching plain documents content</li>
								<li>Recipients can open shared documents as easily as opening any standard web URL.</li>
							</ul>						

						</div>						  
					</div>	

					<div class="row">
						<div class="span8 offset2">
							<hr class="bs-docs-separator">
						</div>						  
					</div>
					<div class="row">
						<div class="span2 offset2">
							<h4 style="text-align:justify">Easy to deploy</h4>
						</div>	
						<div class="span6">
						<ul style="text-align:justify" class="ok">
							<li>Set up the service on a single computer in less than a minute.</li>
							<li>Deploying the service on hundreds of computer is a matter of minutes with usual deployment tools.</li>	
						</ul>	
						</div>						  
					</div>	
					-->	
					<div class="row">
						<div class="span8 offset2">
							<hr class="bs-docs-separator">
						</div>						  
					</div>						
					
					<div class="row">

						<div class="span8 offset2">
							<table class="table table-bordered" >
								<colgroup>
									<col class="span1">
									<col class="span3">
									<col class="span3">
								</colgroup>							
								<thead>
								
									<tr>
										<td >
											Version
										</td>
										<td style="text-align:center">
											Gratuite
										</td>
										<td style="text-align:center">
											Pro
										</td>										
									</tr>
								</thead>
								<tbody>
									<tr><td colspan="3"><h4>Caractéristiques</h4></td>
									</tr>									
									<tr>
										<td >
											Intégration dans Microsoft Outlook
										</td>
										<td style="text-align:center">
											Oui (2007/2010/2013)
										</td>
										<td style="text-align:center">
											Oui (2007/2010/2013)
										</td>										
									</tr>	
									<tr>
										<td >
											Disponibilité des documents
										</td>
										<td style="text-align:center">
											Jusqu'à 15 jours
										</td>
										<td style="text-align:center">
											Jusqu'à deux ans
										</td>										
									</tr>	
									<tr>
										<td >
											Taille maximale des documents
										</td>
										<td style="text-align:center">
											1Go
										</td>
										<td style="text-align:center">
											4Go
										</td>										
									</tr>
									<tr>
										<td >
											Volume maximum de données partagées
										</td>
										<td style="text-align:center">
											Illimité
										</td>
										<td style="text-align:center">
											Illimité
										</td>										
									</tr>										
									<tr>
										<td >
											Localisation des serveurs
										</td>
										<td style="text-align:center">
											France
										</td>
										<td style="text-align:center">
											France
										</td>										
									</tr>
									<tr>
										<td >
											Accélération des transferts de documents
										</td>
										<td style="text-align:center">
											-
										</td>
										<td style="text-align:center">
											Oui
										</td>										
									</tr>	
									<tr>
										<td >
											Niveau de sécurité
										</td>
										<td style="text-align:center">
											Elevé (cryptage SSL)
										</td>
										<td style="text-align:center">
											Elevé (cryptage SSL)
										</td>										
									</tr>		
									<tr>
										<td >
											Console d'administration
										</td>
										<td style="text-align:center">
											-
										</td>
										<td style="text-align:center">
											Oui
										</td>										
									</tr>
									<tr><td colspan="3"><h4>Ce que vous économisez</h4></td>
									</tr>
									<tr>
										<td >
											En temps
										</td>
										<td style="text-align:center">
											Plusieurs heures chaque année
										</td>
										<td style="text-align:center">
											Plusieurs heures chaque année
										</td>										
									</tr>	
									<tr>
										<td >
											De la bande passante
										</td>
										<td style="text-align:center">
											Oui
										</td>
										<td style="text-align:center">
											Oui
										</td>										
									</tr>
									<tr>
										<td >
											De l'espace de stockage
										</td>
										<td style="text-align:center">
											Oui
										</td>
										<td style="text-align:center">
											Oui
										</td>										
									</tr>
									
									<tr><td colspan="3"><h4>Support & Garanties</h4></td>
									</tr>
									<tr>									
										<td >
											SLA
										</td>
										<td style="text-align:center">
											-
										</td>
										<td style="text-align:center">
											99,9%
										</td>										
									</tr>
									<tr>		
										<td >
											Support
										</td>
										<td style="text-align:center">
											-
										</td>
										<td style="text-align:center">
											Dédié
										</td>										
									</tr>	
									<tr><td colspan="3"><h4>Pricing</h4></td>
									</tr>	
									<tr>		
										<td >
											Prix
										</td>
										<td style="text-align:center">
											Gratuit
										</td>
										<td style="text-align:center">
											Nous contacter
										</td>										
									</tr>
									<tr>		
										<td >
											Type d'utilisation autorisée
										</td>
										<td style="text-align:center">
											Non-commerciale
										</td>
										<td style="text-align:center">
											Non-commerciale, commerciale
										</td>										
									</tr>	
									<tr>		
										<td >
											Réductions pour achat en volume
										</td>
										<td style="text-align:center">
											-
										</td>
										<td style="text-align:center">
											Oui (nous contacter)
										</td>										
									</tr>				
									<tr>		
										<td >
											
										</td>
										<td style="text-align:center">
											<a href="https://www.wagapi.com/pub/smartshare/last/setup.exe" class="btn btn-success"> Essayer SmartSha.re gratuitement !</a>
										</td>
										<td style="text-align:center">
											<a  href="http://wagapi.zendesk.com/account/dropboxes/20133173" onClick="script: Zenbox.show();" class="btn btn-success"> Intéressé par SmartSha.re Pro ? Contactez nous.</a>
										</td>																				
									</tr>										
								</tbody>
								
							</table>	
						</div>	
						<div class="span12">
							<p>
								<div class="row">	
									<div class="span12">
									<a href="http://wagapi.zendesk.com/account/dropboxes/20133173" onClick="script: Zenbox.show();" class="btn btn-primary btn-large contact" >Contactez nous !</a>
									</div>
								</div>	
							</p>		
						</div>						
					</div>	
				
               <!--  </div> -->
    <!-- 3rd tab
    ================================================== 				
                <div class="tab-pane" id="tab2">
                  <p>
					<div class="row">	
					  <div class="span12">
						<h3>A range of plans tailored to your needs</h3>
						<p>
						</p>
					  </div>
					   <div class="span3">
						<div class="thumbnail">
							<h4>Basic</h4>
							<p>1Gb of storage space</p>
							<p>100Mb maximum file size </p>
							<p>Maximum file availability : 3 month</p>
							<p>Limited support</p>
						</div>
					  </div>
					   <div class="span3">
						<div class="thumbnail">
							<h4>Extended</h4>
							<p>Unlimited storage space</p>
							<p>2Gb maximum file size</p>
							<p>Maximum file availability : 2 years (more upon request)</p>
							<p>Full support</p>
						</div>
					  </div>
					   <div class="span3">
						<div class="thumbnail">
							<h4>Business</h4>
							<p>Unlimited storage space</p>
							<p>4Gb maximum file size</p>
							<p>Unlimited file availability</p>
							<p>Tracking available</p>
							<p>Admin console available</p>
							<p>Full support</p>
						</div>
					  </div>					  
					  <div class="span3">
						<div class="thumbnail">
							<h4>Corporate</h4>
							<p>Available upon request</p>
							<p>Full system on your own infrastructure</p>
						</div>
					  </div>					  	  
					</div>						
					</p>
					<p>				
					<div class="row">	
					   <div class="span3">
						<div class="thumbnail">
							<p>10$/user/year</p>
						</div>
					  </div>
					   <div class="span3">
						<div class="thumbnail">
							<p>50$/user/year</p>
							<p>Volume discounts available</p>
						</div>
					  </div>
					   <div class="span3">
						<div class="thumbnail">
							<p>100$/user/year</p>
							<p>Volume discounts available</p>
						</div>
					  </div>					  
					  <div class="span3">
						<div class="thumbnail">
							<p>Contact us</p>
						</div>
					  </div>					  	  
					</div>					
				  </p>				  			  
              </div>
			  -->	
            </div> <!-- /tabbable -->

			</div>
  </div>

</div>

      <!-- Footer
    ================================================== -->
  <?php include ($lang."/helper/footer.php"); ?>



  

</body></html>