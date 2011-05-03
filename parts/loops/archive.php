<?php if(have_posts()): ?>
<?php while(have_posts()) : the_post(); ?>
<?php get_template_part('parts/article-summary'); ?>
<?php endwhile; ?>
<?php endif; ?>