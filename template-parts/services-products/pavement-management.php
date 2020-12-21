                  <?php 
$all_query=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'services-pavement'
     )
    );

     ?>
       <?php  if($all_query->have_posts()):
        while($all_query->have_posts()): 
      $all_query->the_post();
      ?>
            <div class="wrapper-pavement-management-l">
                <div class="wrapper-pavement-management-l-logo">
                  <?php if(function_exists('the_custom_logo')){
          $custom_logo_id=get_theme_mod('custom_logo');
          $logo_info_array=wp_get_attachment_image_src($custom_logo_id);
        } ?><img src="<?php echo $logo_info_array[0]; ?>">
                </div>
                <?php the_content(); ?>
              </div>
              <div class="wrapper-pavement-management-r">
                <div class="wrapper-pavement-management-r-heading">
                  <?php 
                  $image_id = get_post_thumbnail_id();
                  $image_title = get_the_title($image_id);
                  $image_src = wp_get_attachment_image_src($image_id, 'full')[0];?>
                  <?php echo $image_title ;?>
                </div>
                <?php if(!empty($image_src)):?>
                <img src="<?php echo $image_src;?>">
              <?php endif;?>
              </div>
            <?php endwhile;endif; ?>
