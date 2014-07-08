<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
      <title><?php echo $html_title; ?></title>
<meta name="author" content="Christopher Gutteridge">

<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<script src="/resources/jquery-1.9.1.js"></script>
<script src="/resources/jquery-ui.js"></script>
<link rel="stylesheet" href="http://network-bar.data.ac.uk/subsite.css" type="text/css">
<link rel="stylesheet" href="/resources/jquery-ui.css" />
<link rel="stylesheet" href="/resources/site.css">
    
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
    <link rel="shortcut icon" href="http://network-bar.data.ac.uk/images/favicon.ico">
    
    <link rel="apple-touch-icon" href="http://network-bar.data.ac.uk/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://network-bar.data.ac.uk/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://network-bar.data.ac.uk/images/apple-touch-icon-114x114.png">

</head>
<body>

<!-- Primary Page Layout
	================================================== --> 

  <div class="container">
    <div class="sixteen columns padding_top_30 padding_bottom_20">
    <nav role="navigation" id="main-menu">
      <ul class="links inline clearfix">
        <li class=""><a title="OPD Checker" href="/checker">Checker</a></li>
        <li class=""><a title="Homepage" href="/">Homepage</a></li>
      </ul>
    </nav>
      <h1><?php echo $html_title; ?></h1>
	<?php echo $this->render($content,$this->mime,get_defined_vars()); ?>  
	   </div>
	    </div>
		
		<div id="contactable"><!-- contactable html placeholder --></div>
		
	   </body>
	  </html>
<script type="text/javascript" src="//network-bar.data.ac.uk/network-bar.js"></script>
<!--start contactable -->

<script type="text/javascript" src="//network-bar.data.ac.uk/feedback/jquery.validate.pack.js?v=1"></script>
<script type="text/javascript" src="//network-bar.data.ac.uk/feedback/jquery.contactable.php?v=1"></script>
<link rel="stylesheet" href="//network-bar.data.ac.uk/feedback/contactable.css?v=1" type="text/css" />
<script>
	var tracking = {};
	$(function(){$('#contactable').contactable({productKey: 'opd.data', extra: tracking});});
</script>
<!--end contactable -->