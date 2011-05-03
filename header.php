<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta charset="<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<?php wp_enqueue_script("jquery"); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_enqueue_script( $handle = 'site', $src = get_bloginfo('template_directory').'/js/site.js' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php get_template_part('parts/header'); ?>
