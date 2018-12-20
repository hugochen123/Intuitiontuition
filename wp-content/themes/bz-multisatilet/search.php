<?php
/**
 * @package bz-multisatilet
 */

get_header(); ?>

<div class="container">
     <div class="page_content row">
        <section class="site-main col-md-8">
            <div class="blog-post">
				<?php if ( have_posts() ) : ?>
                    <header>
                        <h1 class="entry-title"><?php printf( esc_html( 'Search Results for: %s', 'bz-multisatilet' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    </header>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div><?php the_title();?></div>
						<div><?php the_content();?></div>
                    <?php endwhile; ?>
                    <div class="nav-previous"><?php echo next_posts_link( esc_html__(' Older posts','bz-multisatilet' )); ?></div>
            <div class="nav-next"><?php echo previous_posts_link( esc_html__('Newer posts ;','bz-multisatilet' )); ?></div>
                <?php else : ?>
                <h1 class="entry-title"><?php printf( esc_html__( '404 Page Found', 'bz-multisatilet' )); ?></h1>

                <?php endif; ?>
            </div><!-- blog-post -->
        </section>  
        <div class="col-md-4" id="sidebar">    
            <?php get_sidebar();?> 
       </div><!--col-md-4-->      
        <div class="clearfix"></div>
    </div><!-- site-aligner -->
</div><!-- container -->
<?php get_footer(); ?>