<?php
/*
Template Name: Search Result
*/
?>
<?php get_header(); ?>

<div id="content" class="content-group content-search">
	<div class="pad">
		<div class="post-group">
			<h1 class="title">Search Results for: <?php echo get_search_query(); ?></h1>	
			<?php get_template_part('loop','search'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>