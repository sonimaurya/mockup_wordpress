<?php 
        $all_query2=  new WP_Query(
          array(
              'post_type'=>'post',
              'post_status'=>'publish',
              'category_name'=>'contact-us-google-map'
            )
            );
            if($all_query2->have_posts()):?>
<section class="googleMap" >
           <?php   
            while($all_query2->have_posts()): 
              $all_query2->the_post();?>
               <?php the_content();
               endwhile;
             
               ?>

       
      </section>
      <?php  endif;?>