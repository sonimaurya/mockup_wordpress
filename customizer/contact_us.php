<?php 
function register_my_contact_customizer($wp_customize){
//contact us customize
    $wp_customize->add_section('contact_image_section', array(
        'title' => 'Contact header image',
        'description'   => 'Update Header',

    ));
    
    $wp_customize->add_setting('contact_image_settings', array(
        'default-image'=>get_template_directory_uri() . '/images/contact-us/contactus_bg.jpg',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'contact_img_control', array(
        'label'     => 'Edit Image',
        'settings'  => 'contact_image_settings',
        'section'   => 'contact_image_section'
    ) )); 
    //contact us title
    $wp_customize->add_setting('contact_us_title_settings', array(
        'default'          =>'Contact US',
        'transport'         => 'refresh',
         'capability'=>'edit_theme_options',
         'type' =>'option',
    ));
    
    $wp_customize->add_control('contact_us_title_control', array(
        'label'     => 'Contact Us Title',
        'settings'  => 'contact_us_title_settings',
        'section'   => 'contact_image_section'
    ) );
    //contact us description
    $wp_customize->add_setting('contact_us_description_settings', array(
        'default'          =>'Lorem ipsum dolor sit amet, consectetue Aliquam ornare hendrerit augue I r adipiscing elit Lorem ipsum dolor sit amet, consectetue Aliquam ornare hendrerit augue I r adipiscing elit.Spendisse et justo.Praesent mattis commodo augue.',
        'transport'         => 'refresh',
         'capability'=>'edit_theme_options',
         'type' =>'option',
    ));
    
    $wp_customize->add_control('contact_us_description_control', array(
        'label'     => 'Contact Us Description',
        'settings'  => 'contact_us_description_settings',
        'section'   => 'contact_image_section'
    ) );

    ///contact us form
     $wp_customize->add_section('contact_form_section', array(
        'title' => 'Contact Us form',
        'description'   => 'Update form',

    ));
    
    $wp_customize->add_setting('contact_us_form_title_settings', array(
        'default'=>'REQUEST A FREE CONSULTATION',
        'transport'         => 'refresh',
         'capability'=>'edit_theme_options',
         'type' =>'option',
    ));
    
    $wp_customize->add_control( 'contact_form_title_control', array(
        'label'     => 'Edit Form Title',
        'settings'  => 'contact_us_form_title_settings',
        'section'   => 'contact_form_section'
    )); 
     $wp_customize->add_setting('contact_us_form_description_settings', array(
        'default'          =>'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. CURABITUR 
                MALESUADA BIBENDUM ANTE VEL CONVALLIS. ',
        'transport'         => 'refresh',
         'capability'=>'edit_theme_options',
         'type' =>'option',
    ));
    
    $wp_customize->add_control('contact_us_form_description_control', array(
        'label'     => 'Edit Form Description',
        'settings'  => 'contact_us_form_description_settings',
        'section'   => 'contact_form_section'
    ) );

}
add_action( 'customize_register', 'register_my_contact_customizer' );
?>