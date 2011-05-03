<?php

	$args = array(
	    'type'			=> 'post',
	    'child_of'		=> 0,
	    'orderby'		=> 'name',
	    'order'      	=> 'ASC',
	    'hide_empty' 	=> 1,
	    'hierarchical'	=> 1,
	    'exclude'      	=> '',
	    'include'     	=> '',
	    'number'      	=> '',
	    'pad_counts'  	=> false );

		$categories = get_categories($args);
		$post_count = wp_count_posts()->publish;
?>	
<ol>
<?php foreach($categories as $category): ?>
<li><a href="<?php echo get_category_link($category->cat_ID); ?>" rel="tag"><?= $category->cat_name; ?><em><?php echo $category->category_count; ?> Article<?php if($category->category_count !=1): ?>s<?php endif; ?></em></a></li>
<?php endforeach; ?>	
</ol>
