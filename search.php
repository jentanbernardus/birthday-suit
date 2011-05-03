<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<?php echo get_search_query()); ?>
<?php
/* Run the loop for the search to output the results.
* If you want to overload this in a child theme then include a file
* called loop-search.php and that will be used instead.
*/
get_template_part('loop', 'search');
?>
<?php else : ?>
<?php get_search_form(); ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
