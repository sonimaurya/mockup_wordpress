<section class="middle-content">
 <?php 
$all_query2=  new WP_Query(
  array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'contact-us-info'
    )
    );
      if($all_query2->have_posts()):
        while($all_query2->have_posts()): 
      $all_query2->the_post();?>
      <div class="middle-content-contact-us">
        <div class="middle-content-contact-us-heading">
			<div class="top-heading">  <?php the_title();?></div>
			<div class="horizontal-line"></div>
        </div>
          <?php the_content();?>
      </div>
    <?php endwhile; endif;?>
      <div class="middle-content-contact-us-form">
          <div class="middle-content-contact-us-form-title">
              <div class="middle-content-contact-us-form-title-big">
                <?php echo get_option('contact_us_form_title_settings');?>
                </div>
              <div class="middle-content-contact-us-form-title-small"><?php echo get_option('contact_us_form_description_settings');?></div>
          </div>
          <div class="middle-content-contact-us-form-fileds">
            <div class="form-group">
                <label class="label">Your name<superscript style="color:#5d5f5d">*</superscript></label>
                <input type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label class="label">Your Email<superscript style="color:#5d5f5d">*</superscript></label>
                <input type="email" class="form-control" />
            </div>
            <div class="form-group">
                <label class="label label-textarea">Message</label>
                <textarea class="form-control" rows="5"></textarea>
            </div>
            <div class="form-btn">
                <button class="form-btn-submit">SUBMIT</button>
            </div>
          </div>
      </div>
      </section>
