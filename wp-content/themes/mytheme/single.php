<?php
/**
 * The template for displaying all single posts.
 *
 * @package mytheme
 */

get_header(); ?>

<div class="full">
    <div class="container pad-ends">
        <div class="cell75">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'single' ); ?>

                    <?php the_post_navigation(); ?>

                    <?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			    ?>

                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
        <div class="cell25">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>
