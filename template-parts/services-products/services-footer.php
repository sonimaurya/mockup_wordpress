<section class="footer">
        <?php $img=get_bloginfo('template_url')."/images/home/services.png"; if(function_exists('the_custom_logo')){
          $custom_logo_id=get_theme_mod('custom_logo');
          $logo_info_array=wp_get_attachment_image_src($custom_logo_id);
          $img=$logo_info_array[0];
        } ?>
         <img src="<?php echo $img;?>" class="footer-logo" /> 
        <div class="footer-privacy-text"><span>Privacy Policy</span></div>
        <div class="footer-copyright-text"><?php  echo  get_option('footer_text_box_setting') ?>
        </div>
        <div class="services1-scroll-button" id="back2Top">
          <img src="<?php echo esc_url( get_theme_mod('back_to_top_image_settings' ) );?>">
        </div>
      </section>