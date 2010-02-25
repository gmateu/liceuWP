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
			<!--<li> <a href="#">  L'escola  </a>
				<ul>
					<li> <a href="#">  Trets d'identitat  </a>   </li>
					<li> <a href="#">  Per trobar-nos  </a>   </li>
					<li> <a href="#">  APIMA  </a>   </li>
					<li> <a href="#">  Notícies generals  </a>   </li>
				</ul>
			</li>
			
			<li> <a href="#">  Projectes  </a>
				<ul>
					<li> <a href="#">  sub21  </a>   </li>
					<li> <a href="#">  sub22  </a>   </li>
				</ul>
			</li>-->

		 <?php wp_list_pages('title_li=') ?>


	</ul>
	</div>
</div>

<div id="clearer">
</div>

<div>

</div>

    