<?php
/*
Template Name: Index Page
*/
?>
<?php get_header(); ?> <!-- HEADER.PHP-->
<div class="cajacolor">	
<div id="content" class="content content-group content-index">
	<div class="pad append-clear">	
		
		<div class="post-group">
			
			<?php get_template_part('loop','index'); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>