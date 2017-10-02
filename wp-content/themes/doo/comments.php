<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package doo
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
        <h5 class=" section_title_two"><?php comments_number(); ?></h5>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'doo' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'doo' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'doo' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<div class="comment-list">
            <?php wp_list_comments('type=comment&callback=doo_comment'); ?>
		</div><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'doo' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'doo' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'doo' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'doo' ); ?></p>
	<?php
	endif;
	?>

    <?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $comment_args = array(
        'id_form' => 'ajax-form',
        'title_reply'=> "<span class=' section_title_two'>".esc_html__( 'leave a reply ', 'doo' )."</span>",
        'fields' => apply_filters( 'comment_form_default_fields', array(
            'author' => '<div class="form-group"><input id="author" name="author"  class= "form-control" type="text" value="" placeholder="'.esc_html__( 'your Name*', 'doo' ).'" /></div>',
            'email' => '<div class="form-group"><input value="" id="email" name="email" class= "form-control"  type="text" placeholder="'.esc_html__( 'your Email*', 'doo' ).'" /></div>',
        ) ),
        'comment_field' => '<div class="form-group"><textarea name="comment"'.$aria_req.' class= "form-control" id="comment" rows="6" placeholder="'.esc_html__( 'your Comment*', 'doo' ).'" ></textarea></div>',
        'label_submit' => esc_html__( 'Submit Comment', 'doo'),
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'title_reply_to'    =>  esc_html__('Leave a Reply to %s', 'doo' ),
        'class_submit'      => 'btn btn_one full_width',
    )
    ?>
    <?php comment_form($comment_args); ?>
</div><!-- #comments -->
