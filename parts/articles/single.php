<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
<?php the_time('jS F Y'); ?>
<?php get_template_part('parts/comment-count')?>
<?php the_content('Read More &raquo;'); ?>