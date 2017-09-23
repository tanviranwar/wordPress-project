<?php get_header(); ?>
<!-- end header -->
<section id="inner-headline">
<div class="container">
<div class="row">
<div class="col-lg-12">
<ul class="breadcrumb">
	<li><a href="<?php echo site_url(); ?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
	<li><a href="#"><?php the_title(); ?></a><i class="icon-angle-right"></i></li>
	
</ul>
</div>
</div>
</div>
</section>
<section id="content">
<div class="container">

<!-- end divider -->
<!-- Descriptions -->
<div class="row">
<div class="col-md-12">
<div class="internal-content">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post();?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>

<?php endwhile; ?>
<?php else : ?>
	<div class = "post">
		<h3><?php _e('404 Error&#58; Not Found', 'brightpage'); ?></h3>
	</div>
	
<?php endif; ?>



</div>
</section>
<?php get_footer(); ?>