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
    


<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed site">
	<div id="content" class="site-content">