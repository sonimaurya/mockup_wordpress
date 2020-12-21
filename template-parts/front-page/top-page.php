<section class="header" >

		 <?php get_template_part('template-parts/header');?>
		<div class="header-text">
			<div class="header-text-big-title"><?php echo get_option('home_title_settings'); ?></div>
			<div class="header-text-small-title"><?php echo get_option('home_description_settings'); ?></div>
         <?php echo get_option('home_button_settings'); ?>
		</div>
    </section>
