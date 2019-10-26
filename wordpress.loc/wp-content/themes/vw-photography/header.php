<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-vw">
 *
 * @package VW Photography
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'vw-photography' ) ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header role="banner">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'vw-photography' ); ?></a> 

	<button class="toggleMenu toggle" role="tab"><?php esc_html_e('Menu','vw-photography'); ?></button>

	<div id="header" class="responsive-menu">
		<nav class="nav" role="navigation">
	        <?php wp_nav_menu( array('theme_location'  => 'responsive-menu') ); ?>
	    </nav>
	</div>

	<div class="home-page-header">
		<?php get_template_part('template-parts/header/topbar'); ?>
	</div>

</header>