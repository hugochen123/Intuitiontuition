<?php   
/**
 * @package bz-multisatilet
 */
 require_once get_template_directory()."/dir/lib/bz_multi_satilet_customizer.php";
 function bz_multi_satilet_style_js()
 {
 	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/dir/bootstrap/css/bootstrap.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome.css');
	wp_enqueue_style( 'bz-multisatilet-basic-style', get_stylesheet_uri() );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/dir/bootstrap/js/bootstrap.js', array('jquery'));	
	wp_enqueue_script( 'bz-multisatilet-toggle', get_template_directory_uri() . '/dir/js/bz_multi_satilet_toggle.js', array('jquery'));	
 }
 add_action( 'wp_enqueue_scripts', 'bz_multi_satilet_style_js' );

if ( ! function_exists( 'bz_multi_satilet_setup' ) ) :
function bz_multi_satilet_setup() {   
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'bz-multisatilet' ),
		'footer' => esc_html__( 'Footer Menu', 'bz-multisatilet' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );	
} 
endif; // bz_multi_satilet_setup
add_action( 'after_setup_theme', 'bz_multi_satilet_setup' );

function bz_multi_satilet_widgets_init() { 	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bz-multisatilet' ),
		'description'   => esc_html__( 'Appears on sidebar', 'bz-multisatilet' ),
		'id'            => 'sidebar-1',
		'before_widget' => '',		
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><aside id="" class="widget">',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'bz-multisatilet' ),
		'description'   => esc_html__( 'Appears on sidebar', 'bz-multisatilet' ),
		'id'            => 'footer-1',
		'before_widget' => '',		
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1><aside id="" class="widget">',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'bz-multisatilet' ),
		'description'   => esc_html__( 'Appears on sidebar', 'bz-multisatilet' ),
		'id'            => 'footer-2',
		'before_widget' => '',		
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1><aside id="" class="widget">',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'bz-multisatilet' ),
		'description'   => esc_html__( 'Appears on sidebar', 'bz-multisatilet' ),
		'id'            => 'footer-3',
		'before_widget' => '',		
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1><aside id="" class="widget">',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'bz-multisatilet' ),
		'description'   => esc_html__( 'Appears on sidebar', 'bz-multisatilet' ),
		'id'            => 'footer-4',
		'before_widget' => '',		
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1><aside id="" class="widget">',
		'after_widget'  => '</aside>',
	) );	
}
add_action( 'widgets_init', 'bz_multi_satilet_widgets_init' );
if ( ! isset( $content_width ) ) $content_width = 900;

add_action( 'admin_menu', 'bz_multi_satilet_pros');
function bz_multi_satilet_pros() {    	
	add_theme_page( esc_html__('bz-multisatilet Details', 'bz-multisatilet'), esc_html__('bz-multisatilet Details', 'bz-multisatilet'), 'edit_theme_options', 'bz_multi_satilet_pro', 'bz_multi_satilet_pro_details');   
} 

function bz_multi_satilet_pro_details() { 	
?>
<div class="wrap col-md-8">
<?php $proimage= "".get_template_directory_uri()."/images/themesbunch.jpg"; ?>
<div><a target="_blank" href="<?php echo esc_url( bz_multi_satilet_PROURL ); ?>"><img src="<?php echo esc_url($proimage);?>"></a></div><br>
<div><a class="button button-primary button-large" href="<?php echo esc_url( bz_multi_satilet_PROURL ); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro', 'bz-multisatilet'); ?></a></div><br>
<div><a class="button button-primary button-large" href="<?php echo esc_url( bz_multi_satilet_DEMOURL ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'bz-multisatilet'); ?></a></div><br>
<div><a class="button button-primary button-large" href="<?php echo esc_url( bz_multi_satilet_DOCURL ); ?>" target="_blank"><?php esc_html_e('Documentation', 'bz-multisatilet'); ?></a></div>
 </div> 
<?php }?>
<?php 
add_image_size( 'home-banner-size', 1600, 550,true );
add_image_size( 'home-box-size', 400, 250,true );
add_image_size( 'inner-page-banner', 1600, 450,true );

function bz_multi_satilet_get_excerpt($postid,$post_count_size){
$excerpt = get_post_field('post_content', $postid);;
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, $post_count_size);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
return $excerpt;
}
?>