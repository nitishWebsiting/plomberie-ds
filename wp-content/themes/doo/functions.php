<?php
/**
 * doo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package doo
 */

if ( ! function_exists( 'doo_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function doo_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on doo, use a find and replace
	 * to change 'doo' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'doo', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary'   => esc_html__('Menu Home Only Use For Home Page', 'doo'),
        'secondary' => esc_html__('Menu Pages Only Use For All Other Pages', 'doo'),
    ) );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

    add_editor_style( 'assets/css/editor_style.css' );
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'doo_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'doo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function doo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'doo_content_width', 640 );
}
add_action( 'after_setup_theme', 'doo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function doo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'doo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'doo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'doo_widgets_init' );





/*
Register Fonts
*/
function doo_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'doo' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Lato:400,700,900|Open+Sans:600' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}



/**
 * Enqueue scripts and styles.
 */
function doo_scripts() {
    $protocol = is_ssl() ? 'https' : 'http';
//    css files
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'et-line', get_template_directory_uri().'/assets/css/et-line.css');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css');
    wp_enqueue_style( 'owl-transitions', get_template_directory_uri().'/assets/css/owl.transitions.css');
    wp_enqueue_style( 'owl-theme', get_template_directory_uri().'/assets/css/owl.theme.css');
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css');
    wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.min.css');
    wp_enqueue_style( 'doo-general', get_template_directory_uri().'/assets/css/general.css');
    wp_enqueue_style( 'doo-style', get_template_directory_uri().'/assets/css/style.css');
    wp_enqueue_style( 'doo-fonts', doo_fonts_url(), array(), '1.0.0' );
    //   change theme color
    wp_enqueue_style( 'doo-color', get_template_directory_uri().'/lib/color.php');
    //    js files
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'particles', get_template_directory_uri() . '/assets/js/particles.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'init-particles', get_template_directory_uri() . '/assets/js/init-particles.js', array('jquery'), '', true );
    wp_enqueue_script( 'doo-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );
    wp_enqueue_script( 'YTPlayer', get_template_directory_uri() . '/assets/js/jquery.mb.YTPlayer.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'simple-text-rotator', get_template_directory_uri() . '/assets/js/jquery.simple-text-rotator.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'lettering', get_template_directory_uri() . '/assets/js/jquery.lettering.js', array('jquery'), '', true );
    wp_enqueue_script( 'fittext', get_template_directory_uri() . '/assets/js/jquery.fittext.js', array('jquery'), '', true );
    wp_enqueue_script( 'textillate', get_template_directory_uri() . '/assets/js/jquery.textillate.js', array('jquery'), '', true );
    wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'doo_scripts' );
//* Enqueue scripts and styles in home page only .
function doo_enqueue_front_page_scripts() {
    if( is_front_page() )
    {

        wp_enqueue_script( 'filterizr', get_template_directory_uri() . '/assets/js/jquery.filterizr.min.js', array('jquery'), '', true );


    }
}
add_action( 'wp_enqueue_scripts', 'doo_enqueue_front_page_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function doo_pingback($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>

    <!-- COMMENT  -->
    <div <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
        <div class="pingback-content">
            <h5><a href="<?php echo esc_html( $comment->comment_author_url ); ?> "><?php echo esc_html(  $comment->comment_author);  ?></a></h5>
            <div> <?php echo ( $comment->comment_content); ?></div>
        </div>
    </div>
    <!-- END COMMENT -->
    <?php

}
function doo_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <!-- COMMENT -->
    <div <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
        <div class="comment_avatar">
            <?php
            echo get_avatar( $comment, 32 );
            ?>
        </div>
        <div class="comment_tools">
            <a  title="<?php echo esc_html(  $comment->comment_date ); ?>"><i class="fa fa-clock-o"></i> <?php echo esc_html(  $comment->comment_date ); ?></a>
            <?php
            comment_reply_link( array( 'depth' => $depth, 'max_depth' => $args[ 'max_depth' ],'reply_text'=>__('<i class="fa fa-comments"></i> reply','doo'))
                , $comment->comment_ID
                , $comment->comment_post_ID
            );
            ?>
        </div>
        <div class="comment_content">
            <h5>
                <?php if(esc_html( $comment->comment_author_url ) == ""){
                    if ( esc_html(  $comment->comment_author) != "" ) {
                        echo  esc_html(  $comment->comment_author);
                    }else {
                        echo esc_html__( 'Anonymous', 'doo' );
                    }
                }else{ ?>
                    <a href="<?php echo esc_html( $comment->comment_author_url ); ?> "><?php echo esc_html(  $comment->comment_author);  ?></a>
                <?php }  ?>
            </h5>
            <p><?php echo ( $comment->comment_content); ?></p>
        </div>
    </div>
    <!-- END COMMENT 1 -->

    <?php

}
function doo_pagintion(){
    global $wp_query;
    $total = $wp_query->max_num_pages;
// only bother with the rest if we have more than 1 page!
    if ( $total > 1 )  {
        // get the current page
        if ( !$current_page = get_query_var('paged') )
            $current_page = 1;
        echo paginate_links(array(
            'base'     => get_pagenum_link(1) . '%_%',
            'format'   => 'page/%#%/',
            'current'  => $current_page,
            'total'    => $total,
            'mid_size' => 4,
            'type'     => 'list'
        ));
    }
}


// TGM Pluign activator
require_once get_template_directory() . '/lib/doo-active-plugins.php';


// REDUX FREAMWORK INCLUDE
if ( !isset( $redux_demo ) ) {
    require_once get_template_directory() . '/lib/doo-option.php';
}
// REDUX GLOBAL IN FUNCTION
function  doo_option(){
    global $doo_option;
    return $doo_option;
}