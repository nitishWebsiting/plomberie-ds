<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package doo
 */

get_header(); ?>
<?php $doo_option = doo_option(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
            if ( have_posts() ) :

            if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>

            <?php else : ?>
                <!--==========  Page title ========== -->
                <section  class="page_title hero_parallax text-center  parallax-window" data-parallax="scroll" data-image-src="<?php if($doo_option['blog_header_background']['url'] != ""){ echo esc_url($doo_option['blog_header_background']['url']);}else{echo get_template_directory_uri().'/assets/img/bg/intro4.jpg' ;} ?>">
                    <div class="bg-overlay opacity-6">
                    </div>
                    <div class="hero_parallax_inner">
                        <div class="container">
                            <h1 class="animated fadeInDown wow animated color-light text-uppercase"  data-wow-delay=".1s"> <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></h1>
                            <h4 class="archive-description"><?php echo esc_attr( get_bloginfo( 'description', 'display' ) ); ?></h4>
                        </div>
                    </div>
                </section>
                <!--==========  End Page title ========== -->
            <!-- ==========  Blog Section ========== -->
            <section class="pt90 pb90">
                <div class="container">
            <?php endif; ?>
            <div class="row">
                <?php 	/* Start the Loop */

                while ( have_posts() ) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', get_post_format() );

                endwhile; ?>

                <div class="navigation">
                    <p><?php posts_nav_link(' ','prev page ','next page '); ?></p>
                </div>
            </div>
                <?php else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>
            </div>
    </div>
    </section>
    <!--========== End Blog Section ==========-->
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
