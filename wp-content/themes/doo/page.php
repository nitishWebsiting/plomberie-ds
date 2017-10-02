<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package doo
 */

get_header(); ?>
<?php $doo_option = doo_option(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <!--==========  Page title ========== -->
            <section  class="page_title hero_parallax text-center  parallax-window" data-parallax="scroll" data-image-src="<?php if($doo_option['blog_header_background']['url'] != ""){ echo esc_url($doo_option['blog_header_background']['url']);}else{echo get_template_directory_uri().'/assets/img/bg/intro4.jpg' ;} ?>">
                <div class="bg-overlay opacity-6">
                </div>
                <div class="hero_parallax_inner">
                    <div class="container">
                        <h2 class="animated fadeInDown wow animated color-light"  data-wow-delay=".1s"> <?php esc_html(the_title()); ?></h2>
                        <div class="page-breadcrumb">
                            <a href="<?php echo  esc_url( home_url('/')); ?>"><?php echo esc_html__("home","doo"); ?></a>
                            <?php $categories = get_the_category();
                            if ( ! empty( $categories ) ) {
                                echo '/<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                            }
                            ?>
                            /<span><?php esc_html(the_title()); ?></span>
                        </div>
                    </div>
                </div>
            </section>
            <!--==========  End Page title ========== -->
            <!-- ==========  Blog Section ========== -->
            <div class="pt90 pb90">
                <div class="container">
                    <div class="row">

                        <!-- BLOG CONTENT -->
                        <div class="col-sm-offset-2 col-sm-8 blog-content">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
                        </div>
                        <!-- END BLOG CONTENT -->
                    </div>
                </div>
            </div>
            <!-- End Blog Section -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
