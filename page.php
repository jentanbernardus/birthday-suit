<?php get_header(); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()) : the_post(); ?>
<?php the_title(); ?></h2>
<?php the_content(); ?>
<?php get_sidebar(); ?>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
