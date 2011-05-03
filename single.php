<?php get_header(); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()) : the_post(); ?>
<?php the_title(); ?>
<?php the_content(); ?>
<?php comments_template('', true); ?> 	
<?php the_author(); ?>
<?php the_time('jS F Y'); ?>
<?php the_category($separator = ', '); ?>
<a href="<?php the_permalink(); ?>">Permalink of Article</a>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>