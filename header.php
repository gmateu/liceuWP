<html>

<head>

	<title>Es Liceu</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/js/jquerycssmenu.css" />
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquerycssmenu.js"></script>
	


</head>
<body>
	<div id="header">
		<a href="/">
		<img src="<?php bloginfo('template_url') ?>/images/logo.png">
		</a>
	</div>

<div id="containermenu">
	<div id="myjquerymenu" class="jquerycssmenu"> 
	<ul>

		 <?php wp_list_pages('title_li=') ?>

	</ul>
	</div>
</div>

<div id="clearer">
</div>

<div>

</div>

    