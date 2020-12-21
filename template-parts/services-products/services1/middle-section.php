<?php 
$all_query=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'services1-middle-content'
     )
    );

     ?>
       <?php  if($all_query->have_posts()):
        while($all_query->have_posts()): 
      $all_query->the_post();     
      ?> 
      <section class="wrapper-images">
         <?php  if( class_exists('Dynamic_Featured_Image') ) {
                    global $dynamic_featured_image;
                  $featured_images = $dynamic_featured_image->get_featured_images( );
                    
                    foreach($featured_images as $key=> $featured_image) {
                       
                      $image = get_post($featured_image['attachment_id']);
                      $image_class="";
                      if($key==1){
                        $image_class=" middle-img";
                      }
                      echo ' <div class="responsive-img '.$image_class.'">
                         <img src="'.$featured_image["full"].'">
                         <div class="img-text"> '.$image->post_content.'</div>
                               </div>';
                     
                    }}?>            
           </section>
          <?php endwhile; endif;?>