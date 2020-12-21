 <?php 
$all_query=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'services1-end-section'
     )
    );

     ?>
       <?php  if($all_query->have_posts()):
        while($all_query->have_posts()): 
      $all_query->the_post();     
      ?>
      <section class="wrapper-box">
             <div class="wrapper-box-text">
                  <?php the_title();?>
             </div>
             <div class="wrapper-box-image">
              <?php  if( class_exists('Dynamic_Featured_Image') ) {
                    global $dynamic_featured_image;
                  $featured_images = $dynamic_featured_image->get_featured_images( );
                    
                    foreach($featured_images as $key=>$featured_image) {
                       
                      $image = get_post($featured_image['attachment_id']);
                     
                 echo '  <div class="wrapper-box-image-l">
                 <img src="'.$featured_image["full"].'">
                 <div class="wrapper-box-image-l-text">'.$image->post_title.'</div>
               </div>';
               
                    }}?>            
             
            </div>
           </section>
           <?php endwhile; endif;?>