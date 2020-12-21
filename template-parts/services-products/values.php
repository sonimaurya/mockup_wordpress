   <?php 
$all_query=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'services-values'
     )
    );

     ?>
       <?php  if($all_query->have_posts()):
        while($all_query->have_posts()): 
      $all_query->the_post();     
      ?> 
            <section class="wrapper-values">
                <div class="wrapper-values-b">
                  <div class="wrapper-values-b-h"><?php the_title();?></div>
                  <div class="wrapper-values-b-t">
                   <?php  if( class_exists('Dynamic_Featured_Image') ) {
                    global $dynamic_featured_image;
                  $featured_images = $dynamic_featured_image->get_featured_images( );
                    
                    foreach($featured_images as $featured_image) {
                       
                      $image = get_post($featured_image['attachment_id']);;
                      echo' <div class="wrapper-values-b-t-cards">
                      <div class="wrapper-values-b-t-cards-icon">
                        <img src="'.$featured_image["full"].'">
                      </div>
                      <div class="wrapper-values-b-t-cards-heading">
                        '.$image->post_title.'
                      </div>
                      <div class="wrapper-values-b-t-cards-desc">
                        '.$image->post_content.' 
                      </div>
                    </div>';
                    }}?>
                  </div>
                </div>
                <div class="wrapper-values-footer">
                  <?php the_content();?>
                </div>
            </section>
            <?php endwhile;endif;?>