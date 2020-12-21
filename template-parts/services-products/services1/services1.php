<?php get_header();?>
 <style type="text/css">
  .services2 .header{
  background-image:url(<?php echo esc_url( get_theme_mod('services_image_settings'));?>);
      }
</style>
    <div class="services1 services2 wrapper">
     <?php get_template_part('template-parts/services-products/services1/services1-top');?>
     <section class="services1-content">
      <?php get_template_part('template-parts/services-products/sidebar');?>
       <section class="services1-content-page">
        <section class="services1-content-page-wrapper">
          <section class="wrapper-text">
            <?php if ( isset( $_SESSION['services1-top'] ) ) { 
                   echo $_SESSION['services1-top'];
                         }?>
           </section> 
             <?php get_template_part('template-parts/services-products/services1/middle-section');?>
             <?php get_template_part('template-parts/services-products/services1/services1-end');?>
                <section  class="services2-footer">
                   <img  src="<?php echo get_bloginfo('template_url');?>/images/services/7.jpg">
                </section>
        </section>
         <?php get_template_part('template-parts/services-products/services-footer');?>
    </section>
     </section>
     
    </div>
<?php get_footer();?>
