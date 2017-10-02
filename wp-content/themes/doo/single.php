<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package doo
 */

get_header(); ?>
<?php $doo_option = doo_option(); ?>
<?php while (have_posts()): the_post(); ?>
    <?php $format = get_post_format($post->ID); ?>
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
                <div class="col-sm-9 blog-content">

                    <article class="post">
                        <div class="post-preview">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="post-content">

                            <ul class="post-meta">
                                <li><?php the_date(get_option( 'date_format' )); ?></li>
                                <li>By <?php the_author_posts_link(); ?></li>
                                <li>
                                    <?php $categories = get_the_category();
                                    if ( ! empty( $categories ) ) {
                                        echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                                    }
                                    ?>
                                </li>
                                <li><?php comments_number(); ?></li>
                            </ul>
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                            <div class="pages_link">
                                <?php wp_link_pages('before= & pagelink= <span> %</span>'); ?>
                            </div>
                        </div>
                        <!-- TAGS -->
                        <div class="tags">
                            <?php
                            if(get_the_tag_list()) {
                                echo get_the_tag_list('','','');
                            }
                            ?>
                        </div>
                        <!-- END TAGS -->
                    </article>

                    <!-- COMMENTS -->
                    <div class="comments">


                        <?php comments_template();?>
                        <?php  if (!empty( $wp_query->comments_by_type['pingback'])) { ?>

                            <h5 class=" text-uppercase bottom-line" id="pingbacks"><?php echo esc_html__('Pingbacks','doo'); ?></h5>
                            <ol class="pingbacklist">
                                <?php wp_list_comments('type=pingback&callback=doo_pingback'); ?>
                            </ol>

                        <?php } if (!empty($wp_query->comments_by_type['trackback'])) { ?>

                            <h5 class=" text-uppercase bottom-line"  id="trackbacks"><?php echo esc_html__('Trackbacks','doo'); ?></h5>
                            <ol class="trackbacklist">
                                <?php wp_list_comments('type=trackback&callback=doo_pingback'); ?>
                            </ol>

                        <?php } ?>

                    </div>
                </div>
                <!-- END BLOG CONTENT -->

                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <!-- End Blog Section -->
<?php endwhile; ?>
<?php
get_footer();