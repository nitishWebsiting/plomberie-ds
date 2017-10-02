<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package doo
 */

?>

<div class="col-md-offset-3 col-md-6 col-sm-12 mb25 mt25">
    <!-- Post -->
    <article id="post-<?php the_ID(); ?>" <?php post_class("blog_box"); ?>>
            <div class="post-media">
                <?php
                the_post_thumbnail('', array('class' => 'img-responsive'));
                ?>
            </div>
        <div class="blog_content">
            <h5><?php the_title(); ?></h5>
            <p><?php echo substr(get_the_excerpt(), 0, 120) . '...'; ?></p>
        </div>
        <div class="blog_footer_btn">
            <i class="fa fa-comment-o"></i> <?php comments_number(); ?>
            <a href="<?php the_permalink(); ?>"><?php echo esc_html__("read more","doo"); ?> <i class="fa fa-angle-double-right"></i></a>
        </div>
    </article>
    <!-- End Post -->
</div>
