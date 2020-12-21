
<?php 
$all_query=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'home-news'
     )
    );

     ?>
       <?php  if($all_query->have_posts()):
        while($all_query->have_posts()): 
      $all_query->the_post();
      ?>  
      <section class="news">
	<div class="news-title">
		<div class="top-heading"><?php the_title();?></div>
		<div class="horizontal-line"></div>
	</div>
	<?php the_content();?>
</section>
<?php endwhile; endif;?>