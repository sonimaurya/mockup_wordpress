      <?php 
$all_query=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'services-unique-feature'
     )
    );

     ?>
       <?php  if($all_query->have_posts()):
        while($all_query->have_posts()): 
      $all_query->the_post();
      ?>
           <section class="wrapper-unique-feature">
              <div class="wrapper-unique-feature-box">
              <div class="wrapper-unique-feature-box-heading"><?php the_title(); ?></div>
              <div class="wrapper-unique-feature-box-text-points">
                <?php the_content(); ?>
              </div>
            </div>
            </section> 
            <?php endwhile;endif;?>