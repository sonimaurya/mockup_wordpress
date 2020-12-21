
<?php 
        $all_query2=  new WP_Query(
          array(
              'post_type'=>'post',
              'post_status'=>'publish',
              'category_name'=>'contact-us-connect-with-us'
            )
            );
            if($all_query2->have_posts()):?>
             <?php   
            while($all_query2->have_posts()): 
              $all_query2->the_post();?>
         <section class="project-with-us">
         <div class="project-with-us-title">
           <div class="top-heading"><?php the_title();?> </div>
           <div class="horizontal-line"></div>
        </div>
         <div class="project-with-us-para">
         <?php strip_tags(the_content());?>
         </div>
         <div class="scroll-btn" id="back2Top"><img src="<?php echo esc_url( get_theme_mod('back_to_top_image_settings' ) );?>"></div>
      </section>
      <?php  endwhile; endif;?>