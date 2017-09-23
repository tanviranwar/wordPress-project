
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title('|', true, 'right');?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />



<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
<!-- start header -->
<header>
<div class="navbar navbar-default navbar-static-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php"><span>M</span>oderna</a>
</div>
<div class="navbar-collapse collapse ">

<?php wp_nav_menu(array(
'theme_location' => 'main_menu',
'menu_class' => 'nav navbar-nav',
'fallback_cb' => 'moderna_fallback_menu'

)); ?>

</div>
</div>
</div>
</header>