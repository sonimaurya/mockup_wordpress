<?php get_header(); ?>
  <style type="text/css">
  .services6 .header{
  background-image:url(<?php echo esc_url( get_theme_mod('services_image_settings'));?>);
      }
</style>
    <div class="services1 services6 wrapper">
    <?php get_template_part('template-parts/services-products/services5/top');?>
     <section class="services1-content">
        <?php get_template_part('template-parts/services-products/sidebar');?>
       <section class="services1-content-page">
         <section class="services6-content">
           <section class="services6-content-text">
            <?php if ( isset( $_SESSION['services4-content'] ) ) { 
                   echo $_SESSION['services4-content'];
                         }?>
           <!--   -->
           </section>
          
           <?php get_template_part('template-parts/services-products/services5/features');?>
         </section>
       <?php get_template_part('template-parts/services-products/services-footer');?>
    </section>
     </section>
     
    </div>
<?php get_footer(); ?>
