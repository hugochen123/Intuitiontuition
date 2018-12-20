<?php
/**
 * @package bz-multisatilet
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <?php 
    $bz_multi_satilet_fb = get_theme_mod('bz_multi_satilet_fb'); 
    $bz_multi_satilet_twitter  = get_theme_mod('bz_multi_satilet_twitter'); 
    $bz_multi_satilet_in = get_theme_mod('bz_multi_satilet_in');
    $bz_multi_satilet_glplus = get_theme_mod('bz_multi_satilet_glplus');
    $bz_multi_satilet_phone = get_theme_mod('bz_multi_satilet_phone'); 
    $bz_multi_satilet_address = get_theme_mod('bz_multi_satilet_address');  
  ?>
  <?php if($bz_multi_satilet_fb || $bz_multi_satilet_twitter || $bz_multi_satilet_in || $bz_multi_satilet_glplus || $bz_multi_satilet_phone || $bz_multi_satilet_address) {?>
  <div class="header-top">
  <div class="container">
    <div class="row"> 
          <div class="col-sm-5 rightsphone">
                <?php if(get_theme_mod('bz_multi_satilet_phone')){?>
                    <i class="fa fa-phone"></i> <span class="phno"><?php echo esc_html($bz_multi_satilet_phone);?></span>
                <?php }?>                    
               
                <?php if(get_theme_mod('bz_multi_satilet_address')){?>
                        <i class="fa fa-envelope"></i><?php echo esc_html($bz_multi_satilet_address);?></span>
               <?php }?>         
                   <div class="clear"></div>
        </div><!--col-sm-8 rightsphone-->  
        <div class="col-sm-7"> 
          <div class="social-icons">    
              <?php if(get_theme_mod('bz_multi_satilet_fb')){?>
                <a href="<?php echo esc_url(get_theme_mod('bz_multi_satilet_fb','')); ?>" target="_blank" class="fa fa-facebook fa-1x" title="<?php esc_attr_e('Facebook','bz-multisatilet'); ?>"></a>
              <?php }?>

              <?php if(get_theme_mod('bz_multi_satilet_twitter')){?>
                <a href="<?php echo esc_url(get_theme_mod('bz_multi_satilet_twitter','')); ?>" target="_blank" class="fa fa-twitter fa-1x" title="<?php esc_attr_e('twitter','bz-multisatilet'); ?>"></a>
              <?php }?>
               
              <?php if(get_theme_mod('bz_multi_satilet_glplus')){?>
                <a href="<?php echo esc_url(get_theme_mod('bz_multi_satilet_glplus','')); ?>" target="_blank" class="fa fa-google-plus fa-1x" title="<?php esc_attr_e('google-plus','bz-multisatilet'); ?>"></a>
              <?php }?>
                
              <?php if(get_theme_mod('bz_multi_satilet_in')){?>
                <a href="<?php echo esc_url(get_theme_mod('bz_multi_satilet_in','')); ?>" target="_blank" class="fa fa-linkedin fa-1x" title="<?php esc_attr_e('linkedin','bz-multisatilet'); ?>"></a>
              <?php }?>
          </div> <!--social-icons-->
        </div><!--col-sm-4-->
           
      </div><!--row -->
 </div><!--container-->
</div><!-- header-top -->
 <?php }?>

<section id="main_navigation">
  <div class="container" >
  <div class="row">  
            <div class="col-sm-3 leftlogo">            
                <?php if (display_header_text()==true){?>
                  <div class="logotxt">
                    <h1><a href="<?php echo esc_url( home_url( '/') ); ?>"><?php bloginfo('name'); ?></a></h1>
                    <p><?php bloginfo('description'); ?></p>
                  </div>
                <?php } ?>
            </div> <!--col-sm-3--> 

              <div class="main-navigation-inner col-sm-9 rightmenu">
                  <div class="toggle">
                            <a class="togglemenu" href="#"><?php esc_html_e('Menu','bz-multisatilet'); ?></a>
                         </div><!-- toggle --> 
                  <div class="sitenav">
                      <?php
                      wp_nav_menu( array(
                      'theme_location' => 'primary'
                      ) );
                      ?>
                        </div><!-- site-nav -->
              </div><!--<div class="row">-->
        </div><!--main-navigation-->
  </div><!--container-->
</section><!--main_navigation-->

<?php
 $slidervariable = array();
 for($k=1;$k<=3;$k++){?>
  <?php $banner_id = get_theme_mod('banner'.$k,true); ?>
  <?php $slidequery = new WP_query('page_id='.$banner_id); ?>
  <?php if ($slidequery->have_posts() && $banner_id>0) : 
  while( $slidequery->have_posts() ) : $slidequery->the_post();
    //$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID,'home-banner-size'));
   $thumbnail_id = get_post_thumbnail_id( $post->ID );
   $alt = esc_html(get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true),'bz-multisatilet');
   $image = esc_url(get_the_post_thumbnail_url( $post->ID, 'home-banner-size'),'bz-multisatilet');
   $title = esc_html(get_the_title( $post->ID ),'bz-multisatilet' );
   $my_postid = $post->ID;//This is page id or post id
  $content_post = get_post($my_postid);
  $content = esc_html($content_post->post_content,'bz-multisatilet');
  $slidervariable[] = array('pageid'=>$post->ID,'bannerimage'=>$image,'alt'=>$alt,'slider_title'=>$title,'slider_content'=>$content);
  endwhile;
   endif;
  ?>
  
<?php }?>
<?php //print_r($slidervariable); 
 $slidervariable_count = count($slidervariable);?>
 <?php if($slidervariable_count>0){?>
<section id="banner" class="container-fluid">
<div class="row" >
<div class="col-sm-12">
	<div class="row" >
		<?php if ( is_front_page() || is_home()) {?>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators hidden-xs">
      <?php for($i=0;$i<$slidervariable_count;$i++){?>
      <?php if($i==0){ $active = 'active'; }else{ $active = ''; }?>
      <li data-target="#myCarousel" data-slide-to="<?php echo esc_html($i,'bz-multisatilet');?>" class="<?php echo esc_html($active,'bz-multisatilet');?>"></li>      
      <?php }?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <?php $number = 1;?>
      <?php foreach ($slidervariable as $slidervariables){?>
      <?php if($number==1){
        $statis = "active";
      }else{
        $statis = "";
      }
      ?>

      <div class="item <?php echo esc_html($statis,'bz-multisatilet');?>">
        <img src="<?php echo esc_url($slidervariables['bannerimage'],'bz-multisatilet'); ?>" alt="<?php echo esc_html($slidervariables['alt'],'bz-multisatilet');?>" style="width:100%;">
        <div class="carousel-caption hidden-xs">
          <h3><?php echo esc_html($slidervariables['slider_title'],'bz-multisatilet');?></h3>
          <p><?php echo esc_html($slidervariables['slider_content'],'bz-multisatilet');?></p>
        </div>
      </div>
      <?php $number++;}?>
    </div><!--carousel-inner-->

    <?php if($banner_id>0){?>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only"><?php echo esc_html__('Previous','bz-multisatilet')?></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only"><?php echo esc_html__('Next','bz-multisatilet')?></span>
    </a>
    <?php }?>
  </div><!--myCarousel-->
  <?php }else{?>
  	<img class="img-responsive" src="<?php echo esc_url(get_stylesheet_directory_uri(),'bz-multisatilet'); ?>/images/innerpage.jpg" style="width:100%;">
  <?php }?>
  </div><!--row-->
</div><!--col-sm-12-->
</div><!--row-->
</section><!--banner-->
<?php }?>

<?php if ( is_front_page() && !is_home() ) {?>
<div class="container">
<?php 
get_template_part('home', 'pagehome');?>
</div>
<?php }?>
