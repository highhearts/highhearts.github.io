<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>High Hearts</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" /> 
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.1.pack.js"></script>
<script type="text/javascript" src="/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />
<script type="text/javascript">
$(document).ready(function() {

	/* This is basic - uses default settings */
	
	$("a#single_image").fancybox();
	
	/* Using custom settings */
	
	$("a#inline").fancybox({
		'hideOnContentClick': true
	});

	/* Apply fancybox to multiple items */
	
	$("a[rel=group1]").fancybox({
		'transitionIn'		: 'elastic',
		'transitionOut'		: 'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 		
		'titlePosition' 	: 'over',
		'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
			return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
		}
	});	
	
});
</script>
</head>
<?php $page = "photos"; ?>
<body class="twoColFixLtHdr justin">

<div id="container">
  <div id="header">
    <img src="img/logo.png" border="0" style="margin-top:20px; margin-bottom:10px;" />
    <!--<h1>❤ High Hearts</h1>-->
  <!-- end #header --></div>
  <div id="sidebar1">
    <?php include("nav.php"); ?>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
    <h1> Photos </h1>
    <div class="col">
    <h2> World Cafe Live! </h2>
    <table width="500" border="0" cellspacing="0" cellpadding="10px">
      <tr valign="top">
        <td><a class="example_group" rel="group1" href="img/band1.jpg"><img src="img/thumbs/band1.jpg" alt=""/></a></td>
        <td><a class="example_group" rel="group1" href="img/matt1.jpg"><img src="img/thumbs/matt1.jpg" alt=""/></a></td>
        <td><a class="example_group" rel="group1" href="img/shaun2.jpg"><img src="img/thumbs/shaun2.jpg" alt=""/></a></td>
      </tr>
      <tr valign="top">
        <td><a class="example_group" rel="group1" href="img/justin1.jpg"><img src="img/thumbs/justin1.jpg" alt=""/></a></td>
        <td><a class="example_group" rel="group1" href="img/john1.jpg"><img src="img/thumbs/john1.jpg" alt=""/></a></td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <h2> Shadfest @ J.B. Kline & Son's </h2>
    <table width="500" border="0" cellspacing="0" cellpadding="10px">
      <tr valign="top">
        <td><a class="example_group" rel="group1" href="img/JBklines_shadfest.jpg"><img src="img/thumbs/JBklines_shadfest.jpg" alt=""/></a></td>
        <td><a class="example_group" rel="group1" href="img/JBklines_shadfest_justin.jpg"><img src="img/thumbs/JBklines_shadfest_justin.jpg" alt=""/></a></td>
        <td><a class="example_group" rel="group1" href="img/JBklines_shadfest_shaun.jpg"><img src="img/thumbs/JBklines_shadfest_shaun.jpg" alt=""/></a></td>
      </tr>
      <tr valign="top">
        <td><a class="example_group" rel="group1" href="img/JBklines_shadfest2.jpg"><img src="img/thumbs/JBklines_shadfest2.jpg" alt=""/></a></td>
        <td><a class="example_group" rel="group1" href="img/JBklines_shadfest3.jpg"><img src="img/thumbs/JBklines_shadfest3.jpg" alt=""/></a></td>
        <td>&nbsp;</td>
      </tr>
    </table>    

    <h2> Art &amp; Posters (More coming soon!)</h2>
    <table width="500" border="0" cellspacing="0" cellpadding="10px">
      <tr valign="top">
        <td><a class="example_group" rel="group1" href="img/klines_shadfest.jpg"><img src="img/thumbs/klines_shadfest.jpg" alt=""/></a></td>
        <td><a class="example_group" rel="group1" href="img/hh_o_death2.jpg"><img src="img/thumbs/hh_o_death2.jpg" alt=""/></a></td>
        <td><a class="example_group" rel="group1" href="img/high_hearts_mitchells.jpg"><img src="img/thumbs/high_hearts_mitchells.jpg" width="150" height="194"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    
    <h2>Early Photos</h2>
    <table width="500" border="0" cellspacing="0" cellpadding="10px">
      <tr valign="top">
        <td><a class="example_group" rel="group1" href="img/river.jpg"><img src="img/thumbs/river.jpg" width="150" height="100"/></a></td>
        <td><a class="example_group" rel="group1" href="img/train.jpg"><img src="img/thumbs/train.jpg" width="150" height="100"/></a></td>
        <td><img src="img/spacer.gif" width="150" height="100"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
	</div>    
  <!-- end #mainContent --></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
  <div id="footer">
    <?php include("footer.php"); ?>   
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
