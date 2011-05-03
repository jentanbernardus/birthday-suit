<?php

	remove_action('wp_head', 'wp_generator');    

	add_theme_support('nav-menus');
	add_theme_support('post-thumbnails');
	
	register_nav_menus(array('main_menu' => 'Main Navigation'));

	/**
	 * Print a formatted array to the browser
	 *
	 * @return array
	 * @author Keir Whitaker
	 **/
	function print_a($a) {
		print('<pre>');
		print_r($a);
		print('</pre>');
	}

	
?>