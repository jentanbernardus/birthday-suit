<?php
	/**
	 * Template Name: Category Page
	 */
	get_header(); 
	$category = get_category(get_query_var('cat'),false);
	$a = query_posts('posts_per_page=-1&cat='.$category->cat_ID);
?>

<?php 
	$t_month = '';   
	$start = TRUE;
	if (have_posts()) while (have_posts()) : the_post(); 
?>
<?php if($t_month != get_the_date('m')): ?>
<?php if(!$start):?>
<?php endif; ?>		
<h3 class="month"><?php echo get_the_date('F Y');?></h3>
<?php endif; ?>
<?php get_template_part('parts/article-summary'); ?>
<?php 
	$t_month = get_the_date('m');
	$start = FALSE;
	endwhile;
?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>