<?php

//------Widget register-----*/

function obscura_widget_areas() {
	register_sidebar( array(
'name' => __('Footer Widget First', 'obscura'),
'id' => 'footer_widget_first',
'before_widget' => '<div id="%1s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title"> ',
'after_title' => '</h3>'
		));

register_sidebar( array(
'name' => __('Footer Widget Second', 'obscura'),
'id' => 'footer_widget_second',
'before_widget' => '<div id="%1s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title"> ',
'after_title' => '</h3>',
		));

register_sidebar( array(
'name' => __('Footer Widget Third', 'obscura'),
'id' => 'footer_widget_third',
'before_widget' => '<div id="%1s example-widget-3" class="widget %2$s example">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title"> ',
'after_title' => '</h3>',
		));

register_sidebar( array(
'name' => __('Footer Widget Fourth', 'obscura'),
'id' => 'footer_widget_fourth',
'before_widget' => '<div id="%1s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title"> ',
'after_title' => '</h3>',
		));

}

add_action('widgets_init', 'obscura_widget_areas');



 ?>