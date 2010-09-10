<html>


<head>

<base href="/wordpress/wp-content/themes/liceuWP/">


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="StyleSheet" href="style.css" type="text/css"> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" language="JavaScript" src="scripts.js"></script>



</head>


<body>

<div id="main_container">


<div id="head1">
<img src="imgs/logo_esliceu.png">
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
	<span> Trets d'identitat </span>
	<span> Història </span>
	<span> L'edifici </span>
	<span> Òrgan directiu </span>
	<span> Contacte </span>
</div>

<div id="fade1">
</div>

<table id="maintable">

<tr>
<td id="first_column">

<div id="tit_recorda">Recorda!</div>
<div id="recorda">Els horaris d'examens de setembre els podeu llegir aquí. Així mateix podeu veure la llista de llibres pel curs vinent a "Administració i serveis".</div>

<div id="tit_noticies" class="titbar">Notícies i actualitat</div>
<div id="not_destacada">
	<img src="imgs/imatge_exemple_allots.png">
	<p>
	Catàleg d'activitats estiuenques: Grup de biblioteques infantils
	</p>
	<div>
	<span> <b>Primària</b> | 30/8/2010 </span>
	Recurs que us pot ser d'utilitat si treballeu amb públic infantil. El grup de treball de Biblioteques Infantils i Juvenils ha preparat un document sobre
	el tema de les activitats de lectura
	</div>
</div>

<div id="altres_destacades">

	<?php $first = 0; ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	
		<?php
			$ok = False;
			foreach (get_the_tags() as $tag) {
				if ($tag->name == 'destacada') $ok = True;
			}
			
			if ($ok == False) continue;
		?>

		<?php if ($first == 0) 
			$first=1; 
		else { 
			$first = 1; ?>
			<div class="separator"></div>
		<?php } ?>
		
		<div class="destacada2">
		<table><tr>
				<td>
				<div class="cat_i_data"> <b>ESO i PQPI</b> 30/8/2010 </div>
				<div class="tit"> <?php the_title(); ?> </div>
				</td>
				<td>
				
				<?php 
				if ($images = get_children(array(
					'post_type' => 'attachment',
					'numberposts' => 1,
					'post_status' => null,
					'post_parent' => $post->ID,)))

					foreach($images as $image) {
						$attachment=wp_get_attachment_image_src($image->ID, $size);
					}
				
				if ($attachment)
					echo '<img src="' . $attachment[0] . '">';
				else
					echo '<img src="imgs/dummy.jpg">';
				?>
				
				</td>
			</tr></table>
			<div class="text">  <?php the_content_rss('', TRUE, '', 30); ?>  </div>
		</div>
		
		


	<?php endwhile; ?>
	<?php endif; ?>


</div>

<div id="altres_noticies">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

	<?php
		$ok = True;
		foreach (get_the_tags() as $tag) {
			if ($tag->name == 'destacada') $ok = False;
		}
		
		if ($ok == False) continue;
	?>


	<div class="not_ordinaria">
	
		<?php 
		if ($images = get_children(array(
			'post_type' => 'attachment',
			'numberposts' => 1,
			'post_status' => null,
			'post_parent' => $post->ID,)))

			foreach($images as $image) {
				$attachment=wp_get_attachment_image_src($image->ID, $size);
			}
		
		if ($attachment)
			echo '<img src="' . $attachment[0] . '">';
		else
			echo '<img src="imgs/dummy.jpg">';
		?>
	
		<div class="fright">
			<div class="cat_i_data"> <b>  
			
			<?php foreach((get_the_category()) as $category) { 
				echo $category->cat_name . ' '; 
			}  ?>  
			</b> <?php the_time('F jS, Y') ?> </div>
			<div class="tit"> <?php the_title(); ?> </div>
			<div class="text"> <?php the_content_rss('', TRUE, '', 30); ?> </div>
		</div>
	</div>
	
	<div class="separator"></div>

<?php endwhile; ?>
<?php endif; ?>



<div id="mes_actualitat"> Més actualitat </div>




</div>

</td>

<td id="second_column">

	<div id="container_menu">
		<div class="titbar bar">Destaquem</div>
		<p class="link_leftmenu"> Activitats d'estiu </p>
		<p class="link_leftmenu"> Preguntes Freqüents </p>
		<p class="link_leftmenu"> Divertits </p>
		<p class="link_leftmenu"> Àlbum fotogràfic </p>
		<p class="link_leftmenu">
			<img src="imgs/portes_obertes.png">
		</p>
		<p class="link_leftmenu">
			<img src="imgs/poema_mes.png">
		</p>
		
		
		<div class="titbar bar">Alumnat</div>
		<p class="link_leftmenu"> Calendari escolar </p>
		<p class="link_leftmenu"> Matrícula </p>
		<p class="link_leftmenu"> Wiki </p>
		
		
		<div class="titbar bar">Personal docent</div>
		<p class="link_leftmenu"> Correu intern </p>
		<p class="link_leftmenu"> Incidències </p>
		<p class="link_leftmenu"> Wiki </p>
		
	
	</div>

</td>
</tr>

</table>





</div> <!-- end of div#main_container -->

<div id="footer">

<b> Es Liceu: </b> <i>Carrer Cabana, 31. 07171 Pont d'Inca, Marratxí.</i> <br>
<b> Telèfon: </b> 971 60 09 86 <b> &nbsp; &nbsp;  Fax: </b> 971 79 48 09 <b> &nbsp; &nbsp;   Correu: </b> escola@esliceu.com

</div>



</body>



</html>