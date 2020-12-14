<?php
// to register my stylesheet
function smauryatheme_register_style(){
    $version=wp_get_theme()->get('version');
    wp_enqueue_style('custome',get_template_directory_uri().'/assets/css/main.css',array()
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
    wp_enqueue_script('script',get_template_directory_uri().'/assets/js/script.js'
    ,array(),'1.0',true
);
}

//when wordpress run this hook execute my script
add_action('wp_enqueue_scripts','smauryatheme_register_script');


function smaurya_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    $default_img=get_stylesheet_directory_uri() 
    .'/assets/images/home/banner.jpg';
     $defaults = array(
        'default-image'  => $default_img);

    add_theme_support( 'custom-header' ,$defaults);
    $default_back_img=get_stylesheet_directory_uri() 
    .'/assets/images/home/services_bg.jpg';

    $defaults = array(
        'default-image'          => $default_back_img);
    add_theme_support(  'custom-background', $defaults);
    
}
add_action('after_setup_theme','smaurya_theme_support');



function smaurya_menu(){
    $location=[
        'primary'=>'Desktop menu'
    ];
    register_nav_menus($location);
}
add_action('init','smaurya_menu');
function smaurya_widgets_init() {
    $sidebars = apply_filters( 'smaurya_sidebars_data', array(
        'footer-text'            => esc_html__( 'footer', 'smaurya' ),
    ));
}
add_action( 'widgets_init', 'smaurya_widgets_init');
require get_template_directory().'/inc/Foo_Widget.php';
//require get_template_directory().'/inc/Portfolio_Content.php';
add_action( 'widgets_init', function(){
	register_widget( 'Foo_Widget' );
//	register_widget('Portfolio_Content');
});

function smaurya1_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'NHSA' ),
			'id'            => 'sidebar-copyright',
			'description'   => __( 'Add widgets here to appear in your footer.', 'smaurya' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		),
		
	);

}

function smaurya1_widgets_content(){
	register_sidebar(
	array(
		'name'          => __( 'Content', 'content portfolio' ),
		'id'            => 'sidebar-portfolio',
		'description'   => __( 'Add portfolio content here.', 'smaurya' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	)
	);
}
add_action( 'widgets_init', 'smaurya1_widgets_init' );
add_action( 'widgets_init', 'smaurya1_widgets_content' );


?>