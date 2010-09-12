<?php

function get_subpages($page_name)
{
	$my_wp_query = new WP_Query();
	$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));
	$escola =  get_page_by_title($page_name);
	return get_page_children($escola->ID, $all_wp_pages);
}

?>


<html>


<head>

<title>Es Liceu</title>

<base href="<?php echo get_theme_root_uri() . '/liceuWP/'; ?>">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="StyleSheet" href="style.css" type="text/css"> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" language="JavaScript" src="scripts.js"></script>



</head>


<body>

<div id="main_container">


<div id="head1">
<a href="<?php echo get_bloginfo('url'); ?>"><img src="imgs/logo_esliceu.png"></a>
<p>

<input type="text" value="Cerca">
<!--<input type="button">-->

Localització | Contacte
</p>
</div>

<div id="menu1">
	<span class="selected"> L'escola </span>
	<span> Estudis </span>
	<span> Serveis </span>
	<span> Notícies </span>
</div>

<div id="menu2">

	<?php
		$escola_children = get_subpages("L'escola");
		foreach ($escola_children as $p)
		{
			$link = get_permalink($p->ID);
			echo '<span><a href="' . $link . '">' . $p->post_title . '</a></span>';
		}
	?>

</div>

<div id="fade1">
</div>



