
<!DOCTYPE html>
<php <?php language_attributes(); ?>>
<head>
<meta charset="">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<title>Obscura</title>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css" media="all" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,700,700italic|Open+Sans+Condensed:300,700' rel="stylesheet" type='text/css'>


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/ie8.css" media="all" />


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/ie9.css" media="all" />

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/retina.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/selectnav.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.dcflickr.1.0.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/twitter.min.js"></script>

<script type="text/javascript">
$.backstretch("<?php echo get_template_directory_uri();?>/images/bg/1.jpg");
</script>  

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="scanlines"></div>

<!-- Begin Header -->
<div class="header-wrapper opacity">
<div class="header">
<!-- Begin Logo -->
<div class="logo">
<a href="">
<img src="<?php if ( function_exists('get_option_tree')) : if(get_option_tree ('logo_upload')) : ?>

<?php get_option_tree('logo_upload', '', 'true'); ?>
<?php else : ?>
<?php echo get_template_directory_uri();?>/images/logo.png
<?php endif; endif; ?>"alt="" /></a>
<h5>	

	<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'subtitle') ) : ?>

	<?php get_option_tree( 'subtitle', '', 'true' ); ?>

	<?php else : ?>

		Your Default Data

	<?php endif; endif; ?></h5>
</div>
<!-- End Logo -->
<!-- Begin Menu -->
<div id="menu-wrapper">
<div id="menu" class="menu">
<?php wp_nav_menu( array(
'theme_location' => 'header',
'container' => 'false',
'menu_id' => 'tiny',

)); ?>

</div>
</div>
<div class="clear"></div>
<!-- End Menu -->
</div>
</div>
<!-- End Header -->


<!-- Begin Wrapper -->
<div class="wrapper">
<?php get_template_part('intro'); ?>

<!-- Begin Intro -->
<!-- End Intro --> 