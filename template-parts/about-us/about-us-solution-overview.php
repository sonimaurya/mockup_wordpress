<?php 
$all_query=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'about-us-solution-overview'
     )
    );

     ?>
       <?php  if($all_query->have_posts()):
        while($all_query->have_posts()): 
      $all_query->the_post();
     
      ?>
      <section class="solution-overview">
        <div class="solution-overview-title">
          <div class="top-heading"><?php the_title();?> </div>
          <div class="horizontal-line"></div>
        </div>
        <div class="solution-overview-chart-box">
           <div class="solution-overview-chart-box-logo">
           	<?php  if ( has_post_thumbnail() ) {
      $image= wp_get_attachment_image_src( get_post_thumbnail_id( $all_query->ID ) ,'full');
        echo '<img src="'.$image[0].'"/>';
      }
      ?> 
           </div>
           <div class="solution-overview-chart-box-parent">
           <div class="solution-overview-chart-box-line">
             <div class="solution-overview-chart-box-line-left"></div>
             <div class="solution-overview-chart-box-line-right"></div>
           </div>
           <div class="solution-overview-chart-box-info-box">
           <?php the_content();?>            
           </div>
           </div>
        </div>
      </section>
       <?php endwhile; endif;?>    
