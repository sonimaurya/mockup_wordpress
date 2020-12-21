<?php 
$all_query=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'home-getintouch'
     )
    );

     ?>
       <?php  if($all_query->have_posts()):
        while($all_query->have_posts()): 
      $all_query->the_post();
      ?>  
     <section class="getintouch">
    <div class="getintouch-heading">
      <div class="top-heading"><?php the_title();?></div>
      <div class="horizontal-line"></div>
    </div>
      <div class="getintouch-para">
      <div class="getintouch-para-text"><?php echo  strip_tags(get_the_content());?></div>
      <div class="getintouch-para-contact-us">
 <?php  if( class_exists('Dynamic_Featured_Image') ) {
                    global $dynamic_featured_image;
                  $featured_images = $dynamic_featured_image->get_featured_images( );
                    
                    foreach($featured_images as $key=> $featured_image) {
                       
                      $image = get_post($featured_image['attachment_id']);
                      $image_class="address";
                      if($key>0){
                        $image_class="contact";
                      }
                      echo '<div class="getintouch-para-'.$image_class.'">
                      <div class="getintouch-para-address-icon">
                                <img src="'.$featured_image["full"].'">
                      </div>
                      <div class="getintouch-para-address-text">
                        '.$image->post_content.'
                      </div>
                       </div>';
                     
                    }}?>  
                 
      </div>
      <button class="getintouch-para-text-button">CONTACT US</button>
    </div>
    <div class="home-scroll-button" id="back2Top">
      <img src="<?php echo esc_url( get_theme_mod('back_to_top_image_settings' ) );?>">
          </div>
  </section>
	<?php endwhile; endif;?>