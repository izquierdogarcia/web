<?php
/*
Template Name: Single Post
*/
?>
<?php get_header(); ?>
<div class="contenedor">
	<div id="content" class="content-singular content-single">
	
		<div class="pad">
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php while (have_posts()) : ?>
				<?php the_post(); ?>

				<h1><?php the_title(); ?></h1>					

				<div class="content">
					<?php the_content(); ?>
					<?php wp_link_pages(array('before' => '<p class="pages"><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
					
				<?php endwhile; ?>

			</div>
		</div>
	</div>
</div>

<?php //get_sidebar(); ?>

<div class="clear"></div>

<?php get_footer(); ?>