<?php
	/**
	 * Template Name: Global Archive Page
	 */
	get_header(); 
	$a = query_posts('posts_per_page=-1');
?>
<?php echo count($a); ?> Article<?php if(count($a) != 1): ?>s<?php endif; ?>
<?php 
	$t_month = '';   
	$start = TRUE;
	if (have_posts()) while (have_posts()) : the_post(); 
?>
<?php if($t_month != get_the_date('m')): ?>
<?php if(!$start):?>
<?php endif; ?>		
<?php echo get_the_date('F Y');?>
<?php endif; ?>
<?php get_template_part('parts/article-summary'); ?>
<?php 
	$t_month = get_the_date('m');
	$start = FALSE;
	endwhile;
?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>