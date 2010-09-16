<?php get_header(); ?>



<?php





function get_my_categories()
{
	foreach((get_the_category()) as $category) { 
		echo $category->cat_name . ' | '; 
	}
}


function get_my_thumbnail($post_id, $width= "150", $height = "150")
{
	$scriptpath = get_bloginfo('template_directory');
	
	if ($images = get_children(array(
		'post_type' => 'attachment',
		'numberposts' => 1,
		'post_status' => null,
		'post_parent' => $post_id,)))
		
		foreach($images as $image) {
			
			$attachment=wp_get_attachment_image_src($image->ID, array(32,32));
			
		}
		
	if ($attachment)
	
		echo '<img src="'.$scriptpath.'/timthumb.php?src='. $attachment[0] .'&w='.$width.'&h='.$height.'&zc=1" alt="" />';
	else
		echo '<img src="imgs/dummy.jpg">';
}

function is_in_taglist($val)
{
	if (!get_the_tags()) return False;
	
	foreach(get_the_tags() as $a) {
		if ($a->name == $val)
			return True;
	}
	return False;
}

function get_my_page_by_title($title)
{
	$my_wp_query = new WP_Query();
	$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));
	$page =  get_page_by_title($title);
	return $page;
}
?>




<table id="maintable">

<tr>
<td id="first_column">


<?php
$recorda = get_my_page_by_title('Recorda');
if ($recorda and $recorda->post_status == 'publish') {
?>

	<div id="tit_recorda">Recorda!</div>
	<div id="recorda"> <?php echo $recorda->post_content; ?> </div>

<?php } ?>


<div id="tit_noticies" class="titbar">Notícies i actualitat</div>
	<?php $first = 0; ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	
		<?php
			if (is_in_taglist('portada')){
		?>	
			
	<div id="not_destacada">
			<?php get_my_thumbnail($post->ID, 101, 76) ?>
			<p><?php the_title(); ?></p>
		
			<div>
				<span> <?php get_my_categories(); ?>  | 30/8/2010 </span>
				<?php the_content_rss('', TRUE, '', 30); ?>
			</div>
	</div>

		<?	
			}
		?>
		
		
		
		
		<?php
			if (!is_in_taglist('destacada'))
				continue;
		?>


	<div id="altres_destacades">

		<?php 
			if ($first == 0) $first=1; 
			else { ?>
				<div class="separator"></div>
		<?php } ?>
		
		<div class="destacada2">
		<table><tr>
				<td>
				<div class="cat_i_data"> <b>  <?php get_my_categories(); ?>   </b> <?php the_time('F jS, Y') ?> </div>
				<div class="tit"> <?php the_title(); ?> </div>
				</td>
				<td>
				
				<?php get_my_thumbnail($post->ID, 101, 76) ?>
			
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
		if (is_in_taglist('destacada'))
			continue;
	?>

	<div class="not_ordinaria">
	
		<?php get_my_thumbnail($post->ID) ?>
	
		<div class="fright">
			<div class="cat_i_data"> <b>  
			
			<?php get_my_categories(); ?>  
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



<?php get_footer(); ?>

