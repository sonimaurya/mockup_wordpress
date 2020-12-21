    <?php 
$all_query=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'services4-middle'
     )
    );

     ?>
       <?php  if($all_query->have_posts()):
        while($all_query->have_posts()): 
      $all_query->the_post();
     
      ?>
      <section class="services5-content-images">
         <?php  if( class_exists('Dynamic_Featured_Image') ) {
                    global $dynamic_featured_image;
                  $featured_images = $dynamic_featured_image->get_featured_images( );
                    
                    foreach($featured_images as $key=> $featured_image) {
                       
                      $image = get_post($featured_image['attachment_id']);
                      
                      echo '<div class="services5-image"><img src="'.$featured_image["full"].'"></div>';
                     
                    }}?>  
               
           </section>
           <section class="services5-content-features">
             <div class="services5-content-features-box">
               <div class="services5-content-features-box-t"><?php the_title();?></div>
               <div class="services5-content-features-box-p">
                 <?php the_content();?>
               </div>
             </div>
           </section>
           <?php endwhile; endif;?>