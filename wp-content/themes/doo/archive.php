<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package doo
 */

get_header();
$doo_option = doo_option(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <!--==========  Page title ========== -->
            <section  class="page_title hero_parallax text-center  parallax-window" data-parallax="scroll" data-image-src="<?php if($doo_option['blog_header_background']['url'] != ""){ echo esc_url($doo_option['blog_header_background']['url']);}else{echo get_template_directory_uri().'/assets/img/bg/intro4.jpg' ;} ?>">
                <div class="bg-overlay opacity-6">
                </div>
                <div class="hero_parallax_inner">
                    <div class="container">
                        <?php
                        the_archive_title( '<h2 class="animated fadeInDown wow animated color-light" data-wow-delay=".1s">', '</h2>' );
                        the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>
                    </div>
                </div>
            </section>
            <!--==========  End Page title ========== -->
            <!-- ==========  Blog Section ========== -->
            <div class="pt90 pb90">
                <div class="container">
		<?php
		if ( have_posts() ) : ?>
                    <div class="row">
                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();

                            /*
                             * Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', get_post_format() );

                        endwhile;


                        ?>
                    </div>
            <?php
            doo_pagintion();
                    else :

                        get_template_part( 'template-parts/content', 'none' );
                    endif;
            ?>
                </div>
            </div>
            <!--========== End Blog Section ==========-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
