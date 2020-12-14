<?php

// $consultstreet_footer_copright_text = get_theme_mod('consultstreet_footer_copright_text', 
// __('Copyright &copy; Central Nippon Expressway Company Limited All Rights Reserved.',true));
$consultstreet_footer_copright_text = get_theme_mod('sidebar-copyright', 
__('Copyright &copy; Central Nippon Expressway Company Limited All Rights Reserved.',true));

//  ?>
	<section class="footer">
    <?php if(function_exists('the_custom_logo')){
					$custom_logo_id=get_theme_mod('custom_logo');
					$logo_info_array=wp_get_attachment_image_src($custom_logo_id);
				} ?>
			<img src="<?php echo $logo_info_array[0]; ?>" class="footer-logo">
			<div class="footer-privacy-text"><span>Privacy Policy</span></div>
			<div class="footer-copyright-text">
			<?php if(is_active_sidebar('sidebar-copyright')):?>
			<?php dynamic_sidebar('sidebar-copyright') ?>
			<?php	endif;?>	
            </div>
	</section>

</div>
<?php wp_footer(); ?>
</body>
</html>