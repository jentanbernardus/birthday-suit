<?php
	/**
	 * Template Name: Archives Page
	 */
	get_header(); 
?>

<h1>Archive // <?php if (is_day()) : ?>
<?php echo(get_the_date()); ?>
<?php elseif (is_month()): ?>
<?php echo(get_the_date('F Y')); ?>
<?php elseif (is_year()): ?>
<?php echo(get_the_date('Y')); ?>
<?php else: ?>
<?php echo('Archives'); ?>
<?php endif; 
rewind_posts();
?></h1>
<?php get_template_part('parts/loops/main'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>