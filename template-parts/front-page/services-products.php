   <?php 
$all_query=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'home-services-products'
     )
    );

     ?>
       <?php  if($all_query->have_posts()):
        while($all_query->have_posts()): 
      $all_query->the_post();$i=0;
      ?>    
       <div class="services-products">
				<div class="services-products-heading">
					<h1 class="top-heading"><?php the_title();?></h1>
					<div class="horizontal-line"></div>
				</div>
				<div class="services-products-box">
					<div class="services-products-box-l">
						<?php the_content();?>						
					</div>
					<div class="services-products-box-r">
						<div class="services-products-slideshow">
							<?php
				        if( class_exists('Dynamic_Featured_Image') ) {
								    global $dynamic_featured_image;
								  $featured_images = $dynamic_featured_image->get_featured_images( );
								    
								    foreach($featured_images as $featured_image) {
								    	$i++;
								    	echo '<div class="services-products-slideshow-slides fade">
								<div class="slideshow-slides-shadow"></div>
								<img src="'. $featured_image['full'] .'" class="slideshow-img">
							  </div>';
								       
								    }

								 }?>
						</div>
						<div class="slideshow-dot-box">
							<?php while($i>0): ?>
						<span class="dot" onclick="currentSlide(<?php echo $i;?>)"></span> 
					<?php $i--; endwhile;?>
						</div>
					</div>
				</div>
			</div>

		<?php endwhile; endif;?>