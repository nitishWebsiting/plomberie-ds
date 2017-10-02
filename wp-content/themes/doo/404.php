<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package doo
 */

get_header();
 $doo_option = doo_option(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <!--==========  404 Page ========== -->
            <section  class="page_title hero_parallax hero_full_screen text-center  parallax-window" data-parallax="scroll" data-image-src="<?php if($doo_option['notfound_background']['url'] != ""){ echo esc_url($doo_option['notfound_background']['url']);}else{echo get_template_directory_uri().'/assets/img/bg/snow.jpg' ;} ?>">
                <div class="bg-overlay-light opacity-7" id="particles-circle">
                </div>
                <div class="hero_parallax_inner">
                    <div class="container">
                        <h1 class="animated fadeInDown text-xll wow animated "  data-wow-delay=".1s">
                            <?php

                            if(esc_html( $doo_option['404_title']) == ""){
                                echo __('404', "doo");
                            }else{
                                echo esc_html( $doo_option['404_title']);
                            } ?>
                        </h1>
                        <h1 class="animated fadeInDown  wow animated ">
                            <?php if(esc_html($doo_option['404_content']) == ""){
                                echo __('Oops! That page can&rsquo;t be found.', "doo");
                            }else{
                                echo esc_html($doo_option['404_content']);
                            } ?>
                        </h1>
                        <div class="page-breadcrumb">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn_one btn-lg">
                                <?php if(esc_html( $doo_option['back_404']) == ""){
                                    echo __('Home', "doo");
                                }else{
                                    echo esc_html( $doo_option['back_404']);
                                } ?>
                               </a>
                        </div>
                    </div>
                </div>
            </section>
            <!--========== 404 Page  ========== -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
