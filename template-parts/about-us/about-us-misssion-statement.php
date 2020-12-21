<?php 
$all_query=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'about-us-misssion-statement')
    );

     ?>
       <?php  if($all_query->have_posts()):
        while($all_query->have_posts()): 
      $all_query->the_post();
     
      ?>
    <section class="mission-statements">
        <div class="mission-statements-title">
          <div class="top-heading"><?php the_title();?></div>
          <div class="horizontal-line"></div>
        </div>
        <div class="mission-statements-para">
          <?php the_content();?>
        </div>
     </section>
     <?php endwhile;endif;?>