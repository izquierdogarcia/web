<?php
/*
Template Name: Archive
*/
?>
<?php get_header(); ?>

<div id="content" class="content-group content-archive">
	<div class="pad">
		<div class="post-group">
			<?php the_post(); ?>
			<?php if (is_day()) : ?>
			<h1 class="title">Daily Archives: <?php the_date(); ?></h1>
			<?php elseif (is_month()) : ?>
			<h1 class="title">Monthly Archives: <?php the_date('F Y'); ?></h1>
			<?php elseif (is_year()) : ?>
			<h1 class="title">Yearly Archives: <?php the_date('Y'); ?></h1>
			<?php else : ?>
			<h1 class="title">Blog Archive</h1>
			<?php endif; ?>
			<?php rewind_posts(); ?>		
			<?php get_template_part('loop','archive'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
