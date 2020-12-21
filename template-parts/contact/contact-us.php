
<?php  get_header();?>
<style type="text/css">
	.contact-us .header{
	background-image:url(<?php echo esc_url( get_theme_mod('contact_image_settings'));?>);
      }
</style>
<div class="contact-us wrapper">
<?php get_template_part('template-parts/contact/content-top');?>
  <?php get_template_part('template-parts/contact/middle-content');?>
  <?php get_template_part('template-parts/contact/google-map');?>
  <?php get_template_part('template-parts/contact/connect-with-us');?>
  <?php get_template_part('template-parts/footer');?>
</div>
 <?php get_footer();?>