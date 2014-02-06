<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>High Hearts</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" /> 
</head>
<?php $page = "news"; ?>
<body class="twoColFixLtHdr">

<div id="container">
  <div id="header">
    <h1>❤ High Hearts</h1>
  <!-- end #header --></div>
  <div id="sidebar1">
    <?php include("nav.php"); ?>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <h1 style="color:red;"> Oops! </h1>
    <div class="col">
    <p>We're sorry, but the page you were looking for could not be found!</p>
<!-- embed mailinglist -->
<?php include("mailinglist.php"); ?>

</div>
	<!-- end #mainContent --></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
  <div id="footer">
	<?php include("footer.php"); ?>    
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
