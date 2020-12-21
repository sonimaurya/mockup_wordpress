<?php 
$all_query=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'about-us-background')
    );

     ?>
       <?php  if($all_query->have_posts()):
        while($all_query->have_posts()): 
      $all_query->the_post(); $background='';
      if( class_exists('Dynamic_Featured_Image') ) {
                    global $dynamic_featured_image;
                  $featured_images = $dynamic_featured_image->get_featured_images();
                    foreach($featured_images as $featured_image) {
                      $background='style="background-image:url('.$featured_image['full'].')"';
                    }
                  }
      ?> <section class="background" <?php echo $background ;?>>
          <div class="background-title">
            <div class="top-heading"><?php the_title();?></div>
            <div class="horizontal-line"></div>
          </div>
         <?php the_content();?>
          <div class="background-scroll-button" id="back2Top">
        
      <img src="<?php echo esc_url( get_theme_mod('back_to_top_image_settings' ) );?>">
          </div>
      </section>
      <?php endwhile; endif; ?>