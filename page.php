<?php get_header() ?>

<div id="static_container">


<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
	
		<h2><?php the_title(); ?></h2>
		<?php the_content('Read the rest of this entry &raquo;'); ?>

	<?php endwhile; ?>
	
<?php else : ?>

	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
	
<?php endif; ?>


</div>


<?php get_footer() ?>

