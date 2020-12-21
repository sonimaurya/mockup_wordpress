<?php
// to register my stylesheet
function smauryatheme_register_style(){
    $version=wp_get_theme()->get('version');
    wp_enqueue_style('custome',get_template_directory_uri().'/css/main.css',array()
,$version,'all');
wp_enqueue_style('custome-style',get_template_directory_uri().'/style.css',array('custome')
,$version,'all');
wp_enqueue_style('icon-css','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
}
//when wordpress run this hook execute my style sheet
add_action('wp_enqueue_scripts','smauryatheme_register_style');
//to register my scripts
function smauryatheme_register_script(){
   // $version=wp_get_theme()->get('version');
    wp_enqueue_script('script',get_template_directory_uri().'/js/script.js'
    ,array('jquery-min'),'1.0',true
);
wp_enqueue_script('jquery-min',get_template_directory_uri().'/js/jquery.min.js'
,array(),'1.0',true
);
if (is_front_page()):
wp_enqueue_script('slideshow',get_template_directory_uri().'/js/slideshow.js'
,array('jquery-min'),'1.0',true
);
endif;
}

//when wordpress run this hook execute my script
add_action('wp_enqueue_scripts','smauryatheme_register_script');

function smauryatheme_register_menu(){
  register_nav_menus(
       array('primary-menu'=>__('primary menu'))
  );
   register_nav_menus(
       array('sidebar-menu'=>__('Sidebar Menu'))
  );
}
add_action('init','smauryatheme_register_menu');

class Menu_With_Description extends Walker_Nav_Menu {
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
         
        $class_names = $value = '';
 
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
 
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';
 
        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
 
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';
 
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'><div class="heading">';
        // $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .=! empty( $item->attr_title ) ? esc_attr( $item->attr_title ): '';
        $item_output .= '</div><div class="subheading">' . $item->description . '</div>';
        $item_output .= '</a>';
        $item_output .= $args->after;
 
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

function smaurya_theme_custom_logo(){
    add_theme_support('custom-logo');
}
add_action('after_setup_theme','smaurya_theme_custom_logo');


// register our custom posts
function smaurya_register_projects(){
register_post_type('NHSA_Project',array(
    'labels'=>array(
        'name'=>__('NHSA Project'),
        'singular_name'=>__('NHSA_Project')
    ),
    'public'=>true,
    'show_in_nav_menus'=>true,
    'has_archive'=>false,
    'supports'=>array('title','editor','excerpt','author','comments','slug'),
));
}
add_action("init","smaurya_register_projects");

function smaurya_register_sidebar(){
register_sidebar(array(
    'name'=>__('Primary Sidebar'),
    'id'=>'sidebar-2',
    'before_widget'=>'',
    'after_widget'=>'',
    'before_title'=>'',
    'after_title'=>'',
));
}
add_action("init","smaurya_register_sidebar");

function NHSA_Theme_support(){
add_theme_support("post-thumbnails");
add_theme_support("post-formats",array('aside','gallery',"link"));
}
add_action("after_setup_theme","NHSA_Theme_support");

require_once('customizer/contact_us.php');;
function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
    $wp_customize->add_section( 'mytheme_footer_section' , array(
    'title'      => __( 'Change footer copyright', 'mytheme' ),
    'description'=>'',
    'priority'   => 30,
   ));
    //save in memory 
    $wp_customize->add_setting( 'footer_text_box_setting' , array(
    'default'   => 'Copyright © Central Nippon Expressway Company Limited All Rights Reserved.',
    'capability'=>'edit_theme_options',
    //'transport' => 'refresh',
    'type' =>'option',
   ));
    //show controls
    $wp_customize->add_control( 'mytheme_first_control', array(
    'label'      => __( 'Footer Text', 'mytheme' ),
    'section'    => 'mytheme_footer_section',
    'settings'   => 'footer_text_box_setting',
)  );

       $wp_customize->add_section( 'mytheme_footer_link' , array(
    'title'      => __( 'Change footer link', 'mytheme' ),
    'description'=>'',
    'priority'   => 30,
) );
    //save in memory 
    $wp_customize->add_setting( 'footer_text_box_link_setting' , array(
    'default'   => 'https://codex.wordpress.org',
    'capability'=>'edit_theme_options',
    //'transport' => 'refresh',
    'type' =>'option',
) );
    //show controls
    $wp_customize->add_control( 'mytheme_first_link_control', array(
    'label'      => __( 'Footer link', 'mytheme' ),
    'section'    => 'mytheme_footer_link',
    'settings'   => 'footer_text_box_link_setting',
)  );

    //back to top image
     $wp_customize->add_section('back_to_top_image_section', array(
        'title' => 'Back to top image',
        'description'   => 'Update image'
    ));
    
    $wp_customize->add_setting('back_to_top_image_settings', array(
        'default-image'=>get_template_directory_uri() . '/images/icons/top.png',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'back_to_top_img_control', array(
        'label' => 'Edit Image',
        'settings'  => 'back_to_top_image_settings',
        'section'   => 'back_to_top_image_section'
    ) ));

    //home page header image
     $wp_customize->add_section('home_image_section', array(
        'title' => 'Home header image',
        'description'   => 'Update image',

    ));
    
    $wp_customize->add_setting('home_image_settings', array(
        'default-image'=>get_template_directory_uri() . '/images/home/banner.jpg',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'back_to_top_img_control', array(
        'label'     => 'Edit Image',
        'settings'  => 'home_image_settings',
        'section'   => 'home_image_section'
    ) ));
///add home title
     $wp_customize->add_setting('home_title_settings', array(
        'default'=>'SLICK MATERIAL DESIGN',
        'transport'         => 'refresh',
         'capability'=>'edit_theme_options',
         'type' =>'option',
    ));
    
    $wp_customize->add_control('home_title_control', array(
        'label'     => 'Home Title',
        'settings'  => 'home_title_settings',
        'section'   => 'home_image_section'
    ) );
    ///add home description
     $wp_customize->add_setting('home_description_settings', array(
        'default'=>'BEAUTIFUL,ELEGENTLY CODED , ONE-PAGE WORDPRESS THEME FOR BUSINESS',
        'transport'         => 'refresh',
         'capability'=>'edit_theme_options',
         'type' =>'option',
    ));
    
    $wp_customize->add_control('home_description_control', array(
        'label'     => 'Home Description',
        'settings'  => 'home_description_settings',
        'section'   => 'home_image_section'
    ) );
     ///add home button
     $wp_customize->add_setting('home_button_settings', array(
        'default'=>'<button class="header-text-button">KNOW MORE</button>',
        'transport'         => 'refresh',
         'capability'=>'edit_theme_options',
         'type' =>'option',
    ));
    
    $wp_customize->add_control('home_button_control', array(
        'label'     => 'Home Button',
        'settings'  => 'home_button_settings',
        'section'   => 'home_image_section'
    ) );

    // about us page header
     $wp_customize->add_section('about_us_image_section', array(
        'title' => 'About Us header',
        'description'   => 'Update Header',

    ));
    
    $wp_customize->add_setting('about_us_image_settings', array(
        'default-image'=>get_template_directory_uri() . '/images/about-us/aboutus_bg.jpg',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'about_us_image_control', array(
        'label'     => 'Edit Image',
        'settings'  => 'about_us_image_settings',
        'section'   => 'about_us_image_section'
    ) ));
///add home title
     $wp_customize->add_setting('about_us_title_settings', array(
        'default'          =>'ABOUT US',
        'transport'         => 'refresh',
         'capability'=>'edit_theme_options',
         'type' =>'option',
    ));
    
    $wp_customize->add_control('about_us_title_control', array(
        'label'     => 'About Us Title',
        'settings'  => 'about_us_title_settings',
        'section'   => 'about_us_image_section'
    ) );
    ///add home description
     $wp_customize->add_setting('about_us_description_settings', array(
        'default'=>'NEXCO Highway Solutions of America, Inc. (NHSA) a NEXCO-Central
Group provides road operators and engineering companies with the
innovative road and traffic management solutions taking advantage of
highway business history over 60 years in Japan.',
        'transport'         => 'refresh',
         'capability'=>'edit_theme_options',
         'type' =>'option',
    ));
    $wp_customize->add_setting('about_us_small_title_settings', array(
        'default'=>'WELCOME TO NHSA',
        'transport'         => 'refresh',
         'capability'=>'edit_theme_options',
         'type' =>'option',
    ));
    $wp_customize->add_control('about_us_small_title_control', array(
        'label'     => 'About us small title',
        'settings'  => 'about_us_small_title_settings',
        'section'   => 'about_us_image_section'
    ) );
      
    
    $wp_customize->add_control('about_us_description_control', array(
        'label'     => 'About Us Description',
        'settings'  => 'about_us_description_settings',
        'section'   => 'about_us_image_section'
    ) );


    //services
     $wp_customize->add_section('services_image_section', array(
        'title' => 'Services header image',
        'description'   => 'Update Header',

    ));
    
    $wp_customize->add_setting('services_image_settings', array(
        'default-image'=>get_template_directory_uri() . '/images/services/services_bg.jpg',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'services_img_control', array(
        'label'     => 'Edit Image',
        'settings'  => 'services_image_settings',
        'section'   => 'services_image_section'
    ) ));

}
add_action( 'customize_register', 'mytheme_customize_register' );

?>