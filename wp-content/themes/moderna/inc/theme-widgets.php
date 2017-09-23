<?php

function moderna_theme_widgets(){
	register_sidebar(array(
		'name' => 'Footer Widgets',
		'id' => 'footer_wid',
		'description' => 'Use this widgets for your footer contents',
		'before_widget' => '<div class="col-lg-3"><div class="widget footer_widget">',
		'after_widget' => '</div></div>',
		'before_title' => '<h5 class="widgetheading">',
		'after_title' => '</h5>',
		));

}
add_action('widgets_init', 'moderna_theme_widgets');





 ?>