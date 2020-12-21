         <div class="header-nav">
          <div class="header-side-nav">
            <i class="fa fa-ellipsis-h" onclick="display_sidebar()"></i>
          </div>
          <div class="header-nav-logo">
            <?php $img=get_bloginfo('template_url')."/images/home/services.png"; if(function_exists('the_custom_logo')){
          $custom_logo_id=get_theme_mod('custom_logo');
          $logo_info_array=wp_get_attachment_image_src($custom_logo_id);
          $img=$logo_info_array[0];
        } ?>
         <img src="<?php echo $img;?>" />   
          </div>
          <span class="mobile-menu"><i class="fa fa-bars"></i></span>
          <?php wp_nav_menu(
           [
             'menu'=>'primary',
             'container'=>'div class="header-nav-menu"',
             'menu_class'=>'header-nav-menu-ul',
             'theme_location'=>'primary'
           ]
         );?>
        </div>