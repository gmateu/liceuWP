<?php get_header(); ?>  

<table id="table_sidebar">
<tr>
<td>

		<div id="content">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Categories: <?php the_category(', ') ?> </p>
			</div>
			<div id="clearer"></div>

		<?php endwhile; ?>
		<?php else : ?>
		    <h2 class="center">Not Found</h2>
		    <p class="center">Sorry, but you are looking for something that isn't here.</p>
		    <?php get_search_form(); ?>
		<?php endif; ?>
	    
	    
	    </div>
</td>
<td>

	<ul id="nav_right">
	<?php if ( !function_exists('dynamic_sidebar')
			|| !dynamic_sidebar() ) : ?>


	<?php endif; ?>
	</ul>


</td>
</tr>
</table>
            
<?php get_footer(); ?>

