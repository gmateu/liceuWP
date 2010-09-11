<?php

function get_trets_identitat_url()
{
	return get_bloginfo('url') . '/?page_id=24';
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
	<span> Presentació </span>
	<span> <a href="<?php echo get_trets_identitat_url(); ?>">Trets d'identitat </a> </span>
	<span> Història </span>
	<span> L'edifici </span>
	<span> Òrgan directiu </span>
	<span> Contacte </span>
</div>

<div id="fade1">
</div>



