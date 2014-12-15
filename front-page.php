<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package my-simone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title>Tutorial theme</title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
    </head>
    
<div id="front-wrapper">

<body <?php body_class(); ?>>


	<header class="front-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title front"><?php bloginfo( 'name' ); ?></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

	</header>

	<div id="front-primary" class="site-content">
		<div id="front-page" role="main">
		    <p id="left" class = "front-page"><a href="index.php?p=1" rel="hotel1">hotel 1</p>
		    <p id="right" class = "front-page"><a href="index.php?p=2" rel="hotel2">hotel 2</p>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php wp_footer(); ?>
</body>
</div><!-- wrapper -->
</html>


