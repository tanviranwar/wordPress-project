<?php

function moderna_theme_custom_posts(){
	register_post_type('jobs', array(
		'public' => true,
		'label' => 'Jobs',
		'labels' => array(
			'name' => 'Jobs',
			'singular_name' => 'Job',
			'add_new' => 'Add New Jobs',
			),
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields')
		));

	register_post_type('slide', array(
		'public' => true,
		'label' => 'Slide',
		'labels' => array(
			'name' => 'Slides',
			'singular_name' => 'Slide',
			'add_new' => 'Add New Slide',
			),
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
		));

	register_post_type('service', array(
		'public' => true,
		'label' => 'Service',
		'labels' => array(
			'name' => 'Services',
			'singular_name' => 'Service',
			'add_new' => 'Add New Service',
			),
		'supports' => array('title', 'editor', 'custom-fields', 'excerpt')
		));

	register_post_type('portfolio', array(
		'public' => true,
		'label' => 'Portfolio',
		'labels' => array(
			'name' => 'Portfolios',
			'singular_name' => 'Portfolio',
			'add_new' => 'Add New Portfolio',
			),
		'supports' => array('title', 'editor', 'custom-fields', 'excerpt', 'thumbnail')
		));

}

add_action('init', 'moderna_theme_custom_posts');




 ?>