<?php

function button_shortcode($atts,$content=nul){
extract(shortcode_atts(array(
	'link'=>'',
	'type'=>'',
	'text'=>'',
	), $atts ));
return '<a class ="btn btn-'.$type.'"href=" '.$link.'"> '.$text.'</a>';
}
add_shortcode('btn', 'button_shortcode');


function icon_button_shortcode($atts,$content=nul){
extract(shortcode_atts(array(
	'link'=>'',
	'type'=>'',
	'icon'=>'',
	'text'=>'',
	), $atts ));
return '<a class ="btn btn-'.$type.'"href=" '.$link.'"><i class="fa fa-'.$icon.'"></i> '.$text.'</a>';
}
add_shortcode('icn_btn', 'icon_button_shortcode');


function progress_bar_shortcode($atts,$content=nul){
extract(shortcode_atts(array(
	'text'=>'',
	'value'=>'',
	'type'=>''
	), $atts) );

return'
<div class="progress">
  <div class="progress-bar progress-bar-'.$type.'" role="progressbar" aria-valuenow="'.$value.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$value.'%">
    <span class="sr-only">'.$text.'</span>
  </div>
</div>' ;
}
add_shortcode('bar', 'progress_bar_shortcode');


function pricing_table_shortcode($atts,$content=nul){
extract(shortcode_atts(array(
	'heading_1'=>'Very',
	'heading_2'=>'Basic',
	'price'=>'$15.00/Month',
	'btn_link'=>'#',
	'btn_text'=>'Register now',
	'btn_type'=>'theme',
	'btn_icon'=>'bolt',
	'column'=>'3',
	), $atts ));
return'
<div class="col-lg-'.$column.'">
	<div class="pricing-box-alt">
		<div class="pricing-heading">
	<h3>'.$heading_1.' <strong>'.$heading_2.'</strong></h3>
</div>
<div class="pricing-terms">
	<h6>'.$price.'</h6>
</div>
<div class="pricing-content">
	'.$content.'
</div>
<div class="pricing-action">
	<a href="'.$btn_link.'" class="btn btn-medium btn-'.$btn_type.'"><i class="fa fa-'.$btn_icon.'"></i> '.$btn_text.'</a>
		</div>
	</div>
</div>
';
}
add_shortcode('pricing', 'pricing_table_shortcode');


function post_list_shortcode($atts,$content=nul){
extract(shortcode_atts(array(
	'type'=>'post',
	'count'=>'5',
	), $atts ));
$q = new WP_Query(
array('posts_per_page' => $count, 'post_type' => $type));

$list = '<ul>';
while($q->have_posts()) : $q->the_post();
$list .='
<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
endwhile;
$list .= '</ul>';
wp_reset_query();
return $list;
}
add_shortcode('post', 'post_list_shortcode');


function portfolio_shortcode($atts,$content=nul){
extract(shortcode_atts(array(
	'expand'=>'',
	), $atts ));
$q = new WP_Query(
array('posts_per_page' => 4, 'post_type' => 'portfolio'));

$list = '<div class="row">
<section id="projects">
<ul id="thumbs" class="portfolio">';
while($q->have_posts()) : $q->the_post();
$idd = get_the_ID();

 $portfolio_large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID ), 'large');
 $portfolio_small = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID ), 'portfolio-thumb');

$list .='

<!-- Item Project and Filter Name -->
	<li class="col-lg-3 design" data-id="id-0" data-type="web">
	<div class="item-thumbs">
	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="'.get_the_title().'" href="'.$portfolio_large[0].'">
	<span class="overlay-img"></span>
	<span class="overlay-img-thumb font-icon-plus"></span>
	</a>
	<!-- Thumb Image and Description -->
	<img src="'.$portfolio_small[0].'" alt="'.get_the_title().'"/>
	
	</div>
	</li>

';
endwhile;
$list .= '</ul></section></div>';
wp_reset_query();
return $list;
}
add_shortcode('portfolio_list', 'portfolio_shortcode');


function job_list_shortcode($atts,$content=nul){
extract(shortcode_atts(array(
	
	'count'=>'5',
	), $atts ));
$q = new WP_Query(
array('posts_per_page' => $count, 'post_type' => 'jobs'));


$list = '<div class="all_job_list">';
while($q->have_posts()) : $q->the_post();
$idd = get_the_ID();
$job_link = get_post_meta($idd, 'job_link', true);

$list .='
<div class="single_job">
<h2>'.get_the_title.'</h2>
'.get_the_excerpt().'
<a href="'.$job_link.'">Apply Online</a>
</div>
';
endwhile;
$list .= '</div>';
wp_reset_query();
return $list;
}
add_shortcode('jobs', 'job_list_shortcode');



 ?>
