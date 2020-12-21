<?php get_header();?>
 <style type="text/css">
  .services1 .header{
  background-image:url(<?php echo esc_url( get_theme_mod('services_image_settings'));?>);
      }
</style>
   <div class="services1 wrapper">
  <?php get_template_part('template-parts/services-products/services-top');?>
     <section class="services1-content">
     <?php get_template_part('template-parts/services-products/sidebar');?>
       <section class="services1-content-page">
         <section class="services1-content-page-wrapper">
          
            <section class="wrapper-text">
                <?php if ( isset( $_SESSION['services-top'] ) ) { 
                   echo $_SESSION['services-top'];
                         }?>
             </section> 
            <?php get_template_part('template-parts/services-products/unique-features');?>
            <section class="wrapper-pavement-management">
              <?php get_template_part('template-parts/services-products/pavement-management');?>
              
             <!--  -->
            </section>
         <?php get_template_part('template-parts/services-products/values'); ?>
         </section>
       <?php get_template_part('template-parts/services-products/footer'); ?>
    </section>
     </section>
     
    </div>

<?php get_footer();?>