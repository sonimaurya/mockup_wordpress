  <?php 
$all_query=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'services3-top'
     )
    );

     ?>
       <?php  if($all_query->have_posts()):
        while($all_query->have_posts()): 
      $all_query->the_post();
     
      ?>
  <section class="header">

        <?php get_template_part('template-parts/header');?>
        <div class="header-text">
          <div class="header-text-big-title">   
          	<?php the_title(); ?>  </div>
        </div>
      </section>
      <?php  $_SESSION['services3-content']=get_the_content(); endwhile; endif;?>