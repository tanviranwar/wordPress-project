<?php

function my_function_name(){
	wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.1.0', 'all');
	wp_register_style('fancybox', get_template_directory_uri().'/css/fancybox/jquery.fancybox.css', array(), '2.1.4', 'all');
	wp_register_style('jcarousel', get_template_directory_uri().'/css/jcarousel.css', array(), '2.1.4', 'all');
	wp_register_style('flexslider', get_template_directory_uri().'/css/flexslider.css', array(), '2.0', 'all');
	wp_register_style('style', get_template_directory_uri().'/css/style.css', array(), '2.1.0', 'all');
	wp_register_style('skins', get_template_directory_uri().'/skins/default.css', array(), '2.1.0', 'all');



	wp_enqueue_style('bootstrap');
	wp_enqueue_style('fancybox');
	wp_enqueue_style('jcarousel');
	wp_enqueue_style('flexslider');
	wp_enqueue_style('style');
	wp_enqueue_style('skins');

wp_enqueue_script('jquery');
	wp_enqueue_script('easing', get_template_directory_uri().'/js/jquery.easing.1.3.js', array('jquery'), '1.3', 'true');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '3.1.0', 'true');
	wp_enqueue_script('fancybox', get_template_directory_uri().'/js/jquery.fancybox.pack.js', array('jquery'), '1.4', 'true');
	wp_enqueue_script('fancybox-media', get_template_directory_uri().'/js/jquery.fancybox-media.js', array('jquery'), '1.0.5', 'true');
	wp_enqueue_script('prettify', get_template_directory_uri().'/js/google-code-prettify/prettify.js', array('jquery'), '1.0', 'true');
	wp_enqueue_script('quicksand', get_template_directory_uri().'/js/portfolio/jquery.quicksand.js', array('jquery'), '1.2.2', 'true');
	wp_enqueue_script('setting', get_template_directory_uri().'/js/portfolio/setting.js', array('jquery'), '1.0', 'true');
	wp_enqueue_script('flexslider', get_template_directory_uri().'/js/jquery.flexslider.js', array('jquery'), '1.8', 'true');
	wp_enqueue_script('animate', get_template_directory_uri().'/js/animate.js', array('jquery'), '1.0', 'true');
	wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js', array('jquery'), '1.0', 'true');

}
add_action('wp_enqueue_scripts', 'my_function_name');

?>