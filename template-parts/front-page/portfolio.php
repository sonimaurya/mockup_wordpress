<?php 
$all_query=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'home-portfolio'
     )
    );

     ?>
       <?php  if($all_query->have_posts()):
        while($all_query->have_posts()): 
      $all_query->the_post();$i=0;
      ?>  
     <section class="portfolio">
		<div class="portfolio-heading">
			<div class="top-heading"><?php the_title();?></div>
			<div class="horizontal-line"></div>
		</div>
		  <div class="portfolio-para">
			<?php the_content();?>
	    </div>
	</section>
	<?php endwhile;endif;?>