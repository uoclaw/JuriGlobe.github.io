<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en"><!-- InstanceBegin template="/Templates/en-content-page.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
<meta http-equiv="Content-Language" content="en-CA">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title></title>
<!-- InstanceEndEditable -->

<!-- InstanceBeginEditable name="metaInformation" -->
<meta name="keywords" content="">
<meta name="description" content="">
<!-- InstanceEndEditable -->

<meta name="author" content="">
<meta name="copyright" content="&copy; University of Ottawa">

<?php include("http://web5.uottawa.ca/assets-templates/inc/head.html"); ?>

<!-- theme -->
<link type="text/css" rel="stylesheet" media="screen" href="http://web5.uottawa.ca/assets-templates/themes/08/main.css">
<!-- site-specific style sheet -->
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/section-header-en.css">
<link type="text/css" rel="stylesheet" media="screen" href="/assets/css/main.css">

<!-- include page tools -->
<script type="text/javascript" src="http://web5.uottawa.ca/assets-templates/js/print.js"></script>
<script type="text/javascript" src="http://web5.uottawa.ca/assets-templates/js/send-to-friend.js"></script>

<!-- InstanceBeginEditable name="head" -->
<!-- page variables -->
<script type="text/javascript">
<!--
var expandNavSection = "section";
-->
</script><!-- /page variables -->

<!-- InstanceEndEditable -->
</head>

<body class="en">

<div id="main-container" class="content-page">
<!-- InstanceBeginEditable name="pageLinks" -->
	<ul id="page-links">
		<li><a id="skip-to-content" href="#main-content">Skip to content</a></li>
		<li><a id="skip-to-localnav" href="#local-nav">Skip to links</a></li>
		<li><a id="ch-lang-url" href="http://www.juriglobe.uottawa.ca/index.php" rel="alternate" lang="fr" hreflang="fr">Français</a></li>
		<li><a id="section-home" href="http://www.juriglobe.uottawa.ca/eng/index.php">Return to the home page</a></li>
	</ul>
<!-- InstanceEndEditable -->
	<!-- /#page-links -->

<?php include("http://web5.uottawa.ca/assets-templates/inc/banner-en.html"); ?>

<div id="section-container">

<!-- InstanceBeginEditable name="sectionHeader" -->
<?php virtual("/assets/inc/section-header-en.html"); ?>
<!-- InstanceEndEditable -->

<div id="page-tools">
<div id="quickpicks">
<ul>
	<?php virtual("/assets/inc/quickpicks-en.html"); ?>
	<?php include("http://web5.uottawa.ca/assets-templates/inc/quickpicks-en.html"); ?>
</ul>
</div><!-- /#quickpicks -->
</div>
<!-- /#page-tools -->

<div id="section-details">
	<!-- InstanceBeginEditable name="Navigation" -->
	<?php virtual("/assets/inc/nav-en.html"); ?>
	
	<!-- InstanceEndEditable -->
</div>

<div id="main-content">
	<?php 
	echo "<h4 align=right>";
	echo "<a href=", str_replace("/eng/","/fra/",$_SERVER["PHP_SELF"]),">Français</a> " ;
	echo "<a href=", str_replace("/eng/","/esp/",$_SERVER["PHP_SELF"]),">Español</a> " ;
	echo "<a href=", str_replace("/eng/","/rus/",$_SERVER["PHP_SELF"]),">Русский</a> " ;
	echo "<a href=", str_replace("/eng/","/chi/",$_SERVER["PHP_SELF"]),">中文</a> " ;
	echo "<a href=", str_replace("/eng/","/ara/",$_SERVER["PHP_SELF"]),">عربي</a> " ;
	echo "</h4>";
	?>
	<!-- InstanceBeginEditable name="mainContent" -->
	<h2>Bibliography</h2>
	<h3>THE COMMONWEALTH</h3>
	<p>BEAUJEU-GARNIER,  J., <em>L’Economie du Commonwealth</em>,  Paris, P.U.F.,  1967.</p>
	<p>GORDON WALER, P. CH., <em>The Commonwealth</em>, London, Secker &amp; Warburg, 1965.</p>
	<p>LANDRÉ, L., <em>Le Commonwealth</em>, Paris, Centre de documentation universitaire,  1967.</p>
	<p><em>The Commonwealth Yearbook 2008</em>, London , Commonwealth, Nexus Strategic  Partnership. </p>
	<p> Site: <a href="http://www.thecommonwealth.org">http://www.thecommonwealth.org</a></p>
	<p>&nbsp;</p>
	<h3>ORGANISATION INTERNATIONALE DE LA FRANCOPHONIE (O.I.F)</h3>
	<p>BARRAT, J., ET MOSEI, C.,  <em>Géopolitique  de la Francophonie</em>,  Paris, La Documentation
	  Française, 2004.</p>
	<p>DENIAU, X.,  <em>La  Francophonie</em>, Paris, Que sais-je&nbsp;?, P.U.F., 2003.</p>
	<p>MARCHAND, V<em>.,  La Francophonie</em>, Paris,  Les essentiels Milan, 1999.</p>
	<p> OUVRAGE COLLECTIF,  <em>Francophonie  et Mondialisation</em>, Paris, CNRS Editions, 2004.</p>
	<p>TÉTU,  M.,  <em>La   Francophonie</em><em>,  histoire&nbsp;: problématique et perspectives</em>, Montréal, Guérin, 
	  1987,  Paris, Hachette, 1988.</p>
	<p> Site&nbsp;: <a href="http://www.francophonie.org">http://www.francophonie.org</a></p>
	<!-- InstanceEndEditable --></div>

<!-- /#main-content -->
</div><!-- /#section-container -->

<?php include("http://web5.uottawa.ca/assets-templates/inc/footer-en.html"); ?>
<?php include("http://web5.uottawa.ca/assets-templates/inc/footer-contact-default-en.html"); ?>

<div id="last-updated">
Last updated: 
<?php echo date ("Y.m.d", getlastmod()) ?>

</div><!-- /#last-updated -->

</div><!-- /#main-container -->

<?php virtual("/assets/inc/beacons-en.html"); ?>

</body>
<!-- InstanceEnd --></html>
