<?php
include ($_SERVER["DOCUMENT_ROOT"]."/wgp/wgp.header.php");
if(!empty($_SESSION['session'])){
	$session = unserialize($_SESSION['session']);
	$login = $session->agent->get_login();
}
?>

<!DOCTYPE html>
<html lang="de"><head>
    <meta charset="utf-8">
    <title>Impressum</title>
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
			<h1>Impressum</h1>
			<ul>
				<li>
					<h3 class="wgp-color">SmartShare</h3>
					<p style="text-align: justify;">
					SmartShare ist ein Service entwickelt und von der Firma betrieben Wagapi - <a href="http://www.wagapi.com">www.wagapi.com</a>	
					</p>
					<p style="text-align: justify;">
					Mit SmartShare unterliegt der Zustimmung zu den Bedingungen und Konditionen unten dargelegt.
					</p>					
					
				</li>				
				<li>
					<h3 class="wgp-color">Nutzungsbedingungen</h3>
					<p style="text-align: justify;">	
					Als Teil seiner Aktivitäten, bietet Wagapi Zugang, unter bestimmten Bedingungen, um alle oder einen Teil ihrer Dienstleistungen. Wagapi bietet diese Dienste ["Dienste"] unter den folgenden Nutzungsbedingungen. Diese Nutzungsbedingungen können jederzeit aktualisiert werden. Durch die Nutzung der Dienste von Wagapi vorgesehen, erklären Sie sich mit den Nutzungsbedingungen einverstanden.
					</p>
					<h4 class="wgp-color">Recht, die Dienste zu nutzen</h4>
					<p style="text-align: justify;">
					Kostenlose Nutzung der Dienste von Wagapi vorgesehen ist im Rahmen der nicht-kommerziellen Gebrauch möglich. Für die kommerzielle Nutzung, danke, uns zu kontaktieren contact@wagapi.com. Das Nutzungsrecht ist keine Lizenz oder Übertragung des Eigentums auf dem Computer-Code für die Erbringung von Dienstleistungen, ist es Programme Upstreamserver Seite oder hinter dem Kunden.
					</p>
					<h4 class="wgp-color">Informationen gespeichert und geteilt</h4>
					<p style="text-align: justify;">
					Die Informationen und Materialien werden auf eigene Gefahr gespeichert. Vor dem Speichern und den Austausch von Informationen, müssen Sie sicherstellen, dass Sie gesetzlich berechtigt sind, dies zu tun.
					</p>
					<h4 class="wgp-color">Haftungsausschluss</h4>
					<p style="text-align: justify;">
					Alle Inhalte und Werke auf dieser Website werden "wie besehen" ohne Gewährleistung irgendeiner Art, weder ausdrücklich noch stillschweigend, einschließlich, aber nicht beschränkt auf, Gewährleistungen der Marktgängigkeit oder Eignung für begrenzt einen bestimmten Zweck werden ausdrücklich abgelehnt. Wagapi übernimmt keine Haftung für Schäden an Ihrem Computersystem, Verlust oder Beschädigung von Daten oder andere Schäden haben, dass die Ergebnisse aus dem Zugriff oder der Nutzung der Dienste.					
					</p>
					<p style="text-align: justify;">
					Weder Wagapi noch seine leitenden Angestellten, Direktoren, Mitarbeiter, Vertreter, Berater oufournisseurs Drittanbieter nicht haftbar gemacht werden für Verluste, Verletzungen, Schäden, Kosten, Aufwendungen oder Ansprüche verursacht durch, die sich aus oder im Zusammenhang mit der Verwendung oder Unfähigkeit, die Dienste verwenden, einschließlich aber nicht beschränkt auf direkte, indirekte, zufällige, Straf-und Folgeschäden begrenzt, auch wenn Wagapi ausdrücklich auf die Möglichkeit solcher Schäden hingewiesen wurde. 
					</p>
					<h4 class="wgp-color">Aktualisierten Bedingungen</h4>
					<p style="text-align: justify;">
					Wagapi kann Änderungen dieser Nutzungsbedingungen zu machen von Zeit zu Zeit. Wenn Änderungen vorgenommen werden, wird eine neue Kopie dieser Bedingungen und Konditionen werden auf dieser Seite verfügbar. Sie verstehen und akzeptieren, dass, wenn Sie unsere Dienste nach dem Datum, an dem diese Nutzungsbedingungen geändert haben verwenden, wird dies die Akzeptanz der neuen Bedingungen stellen.
					</p>
				</li>				
				
				<li>
					<h3 class="wgp-color">Kontact</h3>
					<p style="text-align: justify;">	
					contact@wagapi.com: Jeder Antrag soll an folgende Adresse geschickt werden.
					</p>	
				</li>

			</ul>	
		</p>
	</div>

      <!-- Footer
    ================================================== -->
  <?php include ("helper/footer.php"); ?>



  

</body></html>