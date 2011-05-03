<?php
	
	if(get_query_var('author_name')) {
	    $current_author = get_user_by('slug', get_query_var('author_name'));
	} else {
	    $current_author = get_userdata(get_query_var('author'));
	};
	
	get_header(); 
	$a = query_posts('posts_per_page=-1');
?>
<?php echo $current_author->display_name; ?></h2>

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