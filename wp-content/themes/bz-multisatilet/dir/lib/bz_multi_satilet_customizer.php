<?php
function bz_multi_satilet_enqueue_comments_reply() {
if( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
add_action( 'comment_form_before', 'bz_multi_satilet_enqueue_comments_reply' );
?>
<?php 
function bz_multi_satilet_customize_register($wp_customize){

        $wp_customize->add_section('bz_multi_satilet_header', array(
        'title'    => esc_html__('bz-multisatilet Header Phone and Email', 'bz-multisatilet'),
        'description' => '',
        'priority' => 30,
    ));
    
     $wp_customize->add_section('bz_multi_satilet_social', array(
        'title'    => esc_html__('bz-multisatilet Social Link', 'bz-multisatilet'),
        'description' => '',
        'priority' => 35,
    ));
    
    //  =============================
    //  = Text Input phone number                =
    //  =============================
    $wp_customize->add_setting('bz_multi_satilet_phone', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
 
    $wp_customize->add_control('bz_multi_satilet_phone', array(
        'label'      => esc_html__('Phone Number', 'bz-multisatilet'),
        'section'    => 'bz_multi_satilet_header',
        'setting'   => 'bz_multi_satilet_phone',
        'type'    => 'number'
    ));
    
    //  =============================
    //  = Text Input Email                =
    //  =============================
    $wp_customize->add_setting('bz_multi_satilet_address', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_textarea_field'       
    ));
 
    $wp_customize->add_control('bz_multi_satilet_address', array(
        'label'      => esc_html__('Email Address', 'bz-multisatilet'),
        'section'    => 'bz_multi_satilet_header',
        'setting'   => 'bz_multi_satilet_address',
        'type'    => 'textarea'
    ));

       
    //  =============================
    //  = Text Input facebook                =
    //  =============================
    $wp_customize->add_setting('bz_multi_satilet_fb', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('bz_multi_satilet_fb', array(
        'label'      => esc_html__('Facebook', 'bz-multisatilet'),
        'section'    => 'bz_multi_satilet_social',
        'setting'   => 'bz_multi_satilet_fb',
    ));
    //  =============================
    //  = Text Input Twitter                =
    //  =============================
    $wp_customize->add_setting('bz_multi_satilet_twitter', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('bz_multi_satilet_twitter', array(
        'label'      => esc_html__('Twitter', 'bz-multisatilet'),
        'section'    => 'bz_multi_satilet_social',
        'setting'   => 'bz_multi_satilet_twitter',
    ));
    //  =============================
    //  = Text Input googleplus                =
    //  =============================
    $wp_customize->add_setting('bz_multi_satilet_glplus', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('bz_multi_satilet_glplus', array(
        'label'      => esc_html__('Google Plus', 'bz-multisatilet'),
        'section'    => 'bz_multi_satilet_social',
        'setting'   => 'bz_multi_satilet_glplus',
    ));
    //  =============================
    //  = Text Input linkedin                =
    //  =============================
    $wp_customize->add_setting('bz_multi_satilet_in', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('bz_multi_satilet_in', array(
        'label'      => esc_html__('Linkedin', 'bz-multisatilet'),
        'section'    => 'bz_multi_satilet_social',
        'setting'   => 'bz_multi_satilet_in',
    ));
    

    //  =============================
    //  = slider section              =
    //  =============================
    $wp_customize->add_section('bz_multi_satilet_banner', array(
        'title'    => esc_html__('bz-multisatilet Home Page slider', 'bz-multisatilet'),
        'description' => esc_html__('banner Size Should be ( 1600x550 ).','bz-multisatilet'),
        'priority' => 36,
    ));
   
    $wp_customize->add_setting('banner1',array(
            'default'   => '0',         
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'absint'
    ));
    
    $wp_customize->add_control('banner1',array(
            'type'  => 'dropdown-pages',
            'label' => esc_html__('Select page for banner first:','bz-multisatilet'),
            'section'   => 'bz_multi_satilet_banner'
    )); 

    $wp_customize->add_setting('banner2',array(
            'default'   => '0',         
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'absint'
    ));
    
    $wp_customize->add_control('banner2',array(
            'type'  => 'dropdown-pages',
            'label' => esc_html__('Select page for banner second:','bz-multisatilet'),
            'section'   => 'bz_multi_satilet_banner'
    )); 

    $wp_customize->add_setting('banner3',array(
            'default'   => '0',         
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'absint'
    ));
    
    $wp_customize->add_control('banner3',array(
            'type'  => 'dropdown-pages',
            'label' => esc_html__('Select page for banner third:','bz-multisatilet'),
            'section'   => 'bz_multi_satilet_banner'
    )); 


//  =============================
    //  = welcome section              =
    //  =============================
    $wp_customize->add_section('bz_multi_satilet_welcome_to_homepage', array(
        'title'    => esc_html__('bz-multisatilet HomePage welcome section', 'bz-multisatilet'),
        'description' => esc_html__('It will shows on homepage','bz-multisatilet'),
        'priority' => 36,
    ));
   
    $wp_customize->add_setting('welcome_section',array(
            'default'   => '0',         
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'absint'
    ));
    
    $wp_customize->add_control('welcome_section',array(
            'type'  => 'dropdown-pages',
            'label' => esc_html__('Select page for homepage welcome:','bz-multisatilet'),
            'section'   => 'bz_multi_satilet_welcome_to_homepage'
    )); 


  //  =============================
    //  = Footer              =
    //  =============================

    $wp_customize->add_section('bz_multi_satilet_footer', array(
        'title'    => esc_html__('bz-multisatilet Footer', 'bz-multisatilet'),
        'description' => '',
        'priority' => 37,
    ));

	// Footer design and developed
	 $wp_customize->add_setting('bz_multi_satilet_design', array(
        'default'        => '',
		'sanitize_callback' => 'sanitize_textarea_field'
    ));
 
    $wp_customize->add_control('bz_multi_satilet_design', array(
        'label'      => esc_html__('Design and developed', 'bz-multisatilet'),
        'section'    => 'bz_multi_satilet_footer',
        'setting'   => 'bz_multi_satilet_design',
		'type'	   =>'textarea'
    ));
	// Footer copyright
	 $wp_customize->add_setting('bz_multi_satilet_copyright', array(
        'default'        => '',
		'sanitize_callback' => 'sanitize_textarea_field'       
    ));
 
    $wp_customize->add_control('bz_multi_satilet_copyright', array(
        'label'      => esc_html__('Copyright', 'bz-multisatilet'),
        'section'    => 'bz_multi_satilet_footer',
        'setting'   => 'bz_multi_satilet_copyright',
		'type'	   =>'textarea'
    ));	
}
add_action('customize_register', 'bz_multi_satilet_customize_register');
?>

<?php
define('bz_multi_satilet_PROURL', 'https://themestulip.com/themes/bzmultisatilet-wordpress-theme/');
define('bz_multi_satilet_DEMOURL', 'https://themestulip.com/demo/bz-multisatilet-pro/');
define('bz_multi_satilet_THEMEURL', 'https://themestulip.com/themes/free-bzmultisatilet-wordpress-theme/');
define('bz_multi_satilet_DOCURL', 'https://themestulip.com/documentation/bz-multisatilet-pro');
?>