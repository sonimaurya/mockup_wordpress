<?php  get_header();?>
<style type="text/css">
	.about-us .header{
	background-image:url(<?php echo esc_url( get_theme_mod('about_us_image_settings'));?>);
      }
</style>
<div class="about-us wrapper">
      <?php get_template_part('template-parts/about-us/about-us-top');?>
      <?php get_template_part('template-parts/about-us/about-us-team');?>
      <?php get_template_part('template-parts/about-us/about-us-misssion-statement');?>
      <?php get_template_part('template-parts/about-us/about-us-solution-overview');?>
      <?php get_template_part('template-parts/about-us/about-us-background');?>
   
  <?php get_template_part('template-parts/footer');?>
    </div>
     <?php get_footer();?>