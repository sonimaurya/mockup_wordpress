<?php 
$all_query=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'home-about-us'
     )
    );

     ?>
       <?php  if($all_query->have_posts()):
        while($all_query->have_posts()): 
      $all_query->the_post();
      ?>
<div class="services-about-us">
				<div class="services-about-us-top">
					<h1 class="top-heading"><?php the_title();?> </h1>
					<div class="horizontal-line"></div>
				</div>
			       <div class="services-about-us-para">
					<?php the_content();?>   
				</div>
            </div>
            
            <?php endwhile;endif;?>