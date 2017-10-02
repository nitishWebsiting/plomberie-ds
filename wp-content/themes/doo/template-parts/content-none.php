<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package doo
 */

?>

<section class="no-results not-found  pt100 pb100 text-center">
    <div class="container">
        <h3 class="animated fadeInDown wow animated text-center"  data-wow-delay=".1s">
            <?php esc_html_e( 'Nothing Found', 'doo' );  ?>
        </h3>
        <div class="animated fadeInDown  wow animated text-center">
            <?php
            if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

                <p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'doo' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

            <?php elseif ( is_search() ) : ?>

                <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'doo' ); ?></p>
                <?php
                get_search_form();

            else : ?>

                <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'doo' ); ?></p>
                <?php
                get_search_form();

            endif; ?>
        </div>
</section><!-- .no-results -->
