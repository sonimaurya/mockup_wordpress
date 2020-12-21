<?php 

$all_query=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'about-us-team'
     )
    );

     ?>
       <?php  if($all_query->have_posts()):
        while($all_query->have_posts()): 
      $all_query->the_post();
     
      ?>
    <section class="team">
       <?php the_content();?>
     </section>
     <?php endwhile; endif;?>