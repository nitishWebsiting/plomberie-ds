<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package doo
 */

get_header(); ?>
<?php $doo_option = doo_option(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <!--==========  Page title ========== -->
            <section  class="page_title hero_parallax text-center  parallax-window" data-parallax="scroll" data-image-src="<?php if($doo_option['blog_header_background']['url'] != ""){ echo esc_url($doo_option['blog_header_background']['url']);}else{echo get_template_directory_uri().'/assets/img/bg/intro4.jpg' ;} ?>">
                <div class="bg-overlay opacity-6">
                </div>
                <div class="hero_parallax_inner">
                    <div class="container">
                        <h4 class="animated fadeInDown wow animated color-light"  data-wow-delay=".1s"> <?php printf( esc_html__( 'Search Results for: %s', 'doo' ), '<span>' . get_search_query() . '</span>' ); ?></h4>
                        <div class="page-breadcrumb">
                            <a href="<?php echo  esc_url( home_url('/')); ?>"><?php echo esc_html__("home","doo"); ?></a>
                            /<span><?php echo get_search_query(); ?></span>
                        </div>
                    </div>
                </div>
            </section>
            <!--==========  End Page title ========== -->
            <section class="pt90 pb90">
                <div class="container">
		<?php
		if ( have_posts() ) : ?>

            <div class="row">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :
            ?>
            </div>
            <?php
			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
                </div>
            </section>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
