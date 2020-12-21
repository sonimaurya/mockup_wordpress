<?php get_header(); ?>
<style type="text/css">
	.wrapper .header{
	background-image:url(<?php echo esc_url( get_theme_mod('home_image_settings'));?>);
      }
</style>
<div class="wrapper">
<?php get_template_part('template-parts/front-page/top-page');?>
	<section class="services">
	<?php get_template_part('template-parts/front-page/about-us');?>
	<?php get_template_part('template-parts/front-page/services-products');?>
	</section>

	<?php get_template_part('template-parts/front-page/portfolio');?>
	<?php get_template_part('template-parts/front-page/home-news');?>
	<?php get_template_part('template-parts/front-page/getintouch');?>
	<?php get_template_part('template-parts/footer');?>
</div>
<?php get_footer(); ?>