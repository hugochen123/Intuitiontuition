<div class="container-fluid page_content row ourresources">

      <!--welcome to home page section start-->
<?php 
$welcome_section_variable = array();
$weclomeid = get_theme_mod('welcome_section',true);
$welcomequery = new WP_query('page_id='.$weclomeid); ?>
  <?php if ($welcomequery->have_posts() && $weclomeid>0) : 
  while( $welcomequery->have_posts() ) : $welcomequery->the_post();
    //$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID,'home-banner-size'));
   $thumbnail_id = get_post_thumbnail_id( $post->ID );
   $alt = esc_html(get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true),'bz-multisatilet');
   $image = esc_url(get_the_post_thumbnail_url( $post->ID, 'home-box-size'),'bz-multisatilet');
   $title = esc_html(get_the_title( $post->ID ),'bz-multisatilet');
   $my_postid = $post->ID;
 $content = esc_html(bz_multi_satilet_get_excerpt($my_postid,'250'),'bz-multisatilet');
  $url = esc_url(get_the_permalink($my_postid),'bz-multisatilet');
  $welcome_section_variable[] = array('boxid'=>$post->ID,'boximage'=>$image,'alt'=>$alt,'box_title'=>$title,'box_content'=>$content,'url'=>$url);
  endwhile;
   endif;
  ?>
 <?php if($weclomeid>0){?>   
  <!--welcome to home page section query end -->
  <div class="row" >
<div class="col-md-12">
  
    <?php foreach($welcome_section_variable as $welcome_section_variables){?>
      <div class="col-md-5">
          <img src="<?php echo esc_url($welcome_section_variables['boximage'],'bz-multisatilet');?>" alt="<?php echo esc_html($welcome_section_variables['alt'],'bz-multisatilet');?>" class="img-responsive img-thumbnail">
      </div>
      <div class="col-md-7">
        <h2 class="text-left"><?php echo esc_html($welcome_section_variables['box_title'],'bz-multisatilet');?></h2>
        <p class="text-left"><?php echo esc_html($welcome_section_variables['box_content'],'bz-multisatilet'); ?></p>
      </div>
    <?php }?>
  
</div><!--col-md-12-->
</div><!--row-->
<?php }?>
<div class="clearfix"></div>
</div><!-- ourresources -->