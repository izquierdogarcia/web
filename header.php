<?php require 'includes/required/template-top.php'; ?>
<!DOCTYPE html >
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<?php
//LLAMAR AL FAVICON
$icon = get_option(PADD_NAME_SPACE . '_favicon_url','');
if (!empty($icon)) {
	echo '<link rel="shortcut icon" href="' . $icon . '" />' . "\n";
	echo '<link rel="icon" href="' . $icon . '" />' . "\n";
}

wp_enqueue_script('jquery');
wp_enqueue_script('jquery-corners', get_template_directory_uri() . '/js/jquery.corners.js');
wp_enqueue_script('jquery-supersubs', get_template_directory_uri() . '/js/jquery.supersubs.js');
wp_enqueue_script('jquery-superfish', get_template_directory_uri() . '/js/jquery.superfish.js');
wp_enqueue_script('jquery-cycle', get_template_directory_uri() . '/js/jquery.cycle.js');
wp_enqueue_script('main-loading', get_template_directory_uri() . '/js/main.loading.js');
?>
<?php wp_head(); ?>
<?php
$tracker = get_option(PADD_NAME_SPACE . '_tracker_head','');
if (!empty($tracker)) {
	echo stripslashes($tracker);
}
?>
</head>

<body <?php body_class(); ?>>
<?php
$tracker = get_option(PADD_NAME_SPACE . '_tracker_top','');
if (!empty($tracker)) {
	echo stripslashes($tracker);
}
?>
<div id="container">

	<p class="no-display"><a href="#skip-to-content">Skip to content</a></p>	

	<div id="header"> <!-- BARRA ARRIBA DEL TODO -->
		<div class="pad append-clear">		
			<div class="box box-masthead">
				<?php $tag = (is_home()) ? 'h1' : 'p'; ?>  
				<<?php echo $tag; ?> class="title">
					<a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>
				</<?php echo $tag; ?>>
				<p class="description"><?php bloginfo('description'); ?></p> <!--DESCRIPCIÓN: VENTA DE COLMENAS-->
			</div>
			
			<div class="box box-socialnet">
				<div class="title">
					<!--<h3>Estamos aqu&iacute tambi&eacuten...</h3>-->
				</div>
				<div class="interior">
					<?php padd_theme_widget_socialnet(); ?>
				</div>
			</div>
		</div>
	</div>
	
	<div id="menubar">
		<div class="pad append-clear">		
			<div id="mainmenu" class="box box-mainmenu">
				<h3>Main Menu</h3>
				<div class="interior">
					<?php 
						wp_nav_menu(array(
							'theme_location' => 'main',
							'container' => null,
						)); //ESTE MENU SE PUEDE CAMBIAR EN APARIENCIA.MENU
					?>
				</div>
			</div>
			<div class="box box-search"> <!-- CAJA DE BÚSQUEDA-->
				<h3>Buscar</h3>
				<div class="interior">
					<?php get_search_form(); ?>
				</div>
			</div>			
		</div>
	</div>

	<a name="skip-to-content"></a>
	
	<?php if (is_home()) : ?>
	
	<div id="featured">
		<div class="pad">	
			<div class="box box-featured">
				<!--<h2>Featured Posts</h2>-->		
				<div class="interior">					
					<?php padd_theme_post_featured_posts(); ?>
					
				</div>
			</div>
		</div>
	</div> <!--ESTO ES LO DE LAS IMÁGENES QUE PASAN-->

	<?php endif; ?>	
	
	<div id="body">
		<div class="pad append-clear">
		
</body>
</html>	


