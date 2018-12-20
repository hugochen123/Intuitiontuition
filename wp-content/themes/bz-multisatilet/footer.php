<?php
/**
 * footer Template.
 *
 * @package bz-multisatilet
 */
?>
<!--footer-->
<?php if((is_active_sidebar('footer-1')) || (is_active_sidebar('footer-2')) || (is_active_sidebar('footer-3')) || (is_active_sidebar('footer-4'))) {?>
<footer class="footer">	
		<div class="container">
			<div class="row"><!-- row -->
            
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                	<?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?>
                		<?php endif; // end footer widget area ?>  
                </div><!-- widgets column left end -->
                
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                	<?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?>
                		<?php endif; // end footer widget area ?>  
            	</div><!-- widgets column left end -->
                
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                	<?php if ( ! dynamic_sidebar( 'footer-3' ) ) : ?>
                		<?php endif; // end footer widget area ?>  
            	</div><!-- widgets column left end -->
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column center -->
                
                   <?php if ( ! dynamic_sidebar( 'footer-4' ) ) : ?>
                   	<?php endif; // end footer widget area ?>  
                </div>
        	</div>
		</div>
</footer>
<!--footer-->
<?php }?>

<?php
 $bz_multi_satilet_copyright = get_theme_mod('bz_multi_satilet_copyright');
 $bz_multi_satilet_design = get_theme_mod('bz_multi_satilet_design');  
?>
<?php if($bz_multi_satilet_copyright || $bz_multi_satilet_design){?>
<div class="footer-bottom">

	<div class="container">

		<div class="row">

				<div class="col-sm-12 col-xs-12 col-md-12">

				<div class="design">
					
						<?php if(get_theme_mod('bz_multi_satilet_design')){?>
							<?php echo esc_html($bz_multi_satilet_design);?>
						<?php }?>

				</div><!--design-->

			</div><!--col-sm-6-->

			<div class="col-sm-12 col-xs-12 col-md-12">

				<div class="copyright">

					
						<?php if(get_theme_mod('bz_multi_satilet_copyright')){?>
							<?php echo esc_html($bz_multi_satilet_copyright);?>
						<?php }?>					
				</div><!--copyright-->

			</div>

			

		</div><!--row-->

	</div><!--container-->

</div><!--footer-bottom-->
<?php }?>
<?php wp_footer(); ?>