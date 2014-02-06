<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>High Hearts</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" /> 
</head>
<?php $page = "shows"; ?>
<body class="twoColFixLtHdr john">

<div id="container">
  <div id="header">
    <img src="img/logo.png" border="0" style="margin-top:20px; margin-bottom:10px;" />
  <!-- end #header --></div>
  <div id="sidebar1">
    <?php include("nav.php"); ?>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <!--<h1> Shows </h1>
    <div class="col">
    <dl class="event"> 
    <dt>Friday<br /><span class='schedule_date'>20</span><br />Apr  
2012</dt><dd><strong><a href="http://philly.worldcafelive.com/">World Cafe Live</a></strong><br 
/>Philadelphia<br/>$10 tickets available through World Cafe website.
<br/></dd>
<hr />
<hr />
    </dl>
	<dl class="event"> 
    <dt>Tuesday<br /><span class='schedule_date'>24</span><br />Apr  
2012</dt><dd><strong>The Stockton Inn</strong>
<br/>1 Main St, Stockton NJ 08559<br />
</dd>
<hr />
<hr />
    </dl>
</div>-->
<a href="http://www.songkick.com/artists/1135134" class="songkick-widget" data-theme="light" data-font-color="#333333" data-background-color="#ddd123" data-other-artists="on">Upcoming Shows</a>
<script src="//widget.songkick.com/widget.js"></script>
	<!-- end #mainContent --></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
  <div id="footer">
    <?php include("footer.php"); ?>   
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
