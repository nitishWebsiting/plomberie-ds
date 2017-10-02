<?php
    $root = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
    if ( file_exists( $root.'/wp-load.php' ) ) {
        require_once( $root.'/wp-load.php' );
    } elseif ( file_exists( $root.'/wp-config.php' ) ) {
        require_once( $root.'/wp-config.php' );
    }
    header("Content-type: text/css; charset=utf-8");
    global $doo_option;
?>

    /* 01 MAIN STYLES
    ****************************************************************************************************/
<?php if($doo_option['main_color'] != ''){ ?>

    a {
      color: <?php echo esc_attr( $doo_option['main_color'] ); ?>;
    }
    ::selection {
      color: #fff;
      background: <?php echo esc_attr( $doo_option['main_color'] ); ?>;
    }
    ::-moz-selection {
      color: #fff;
      background: <?php echo esc_attr( $doo_option['main_color'] ); ?>;
    }

<?php } ?>
    /**** header ****/

<?php if($doo_option['background_header'] != ''){ ?>.header {background-color:<?php echo esc_attr( $doo_option['background_header'] ); ?>;} <?php } ?>

<?php if($doo_option['background_header_scroll'] != ''){ ?>.sticky_header.header {background-color:<?php echo esc_attr( $doo_option['background_header_scroll'] ); ?>;} <?php } ?>


<?php if($doo_option['color_header'] != ''){ ?>.header .navbar-nav li a {color:<?php echo esc_attr( $doo_option['color_header'] ); ?>;} <?php } ?>

<?php if($doo_option['color_header_hover'] != ''){ ?>.header .navbar-nav li a:hover, .navbar-nav li.active a {color:<?php echo esc_attr( $doo_option['color_header_hover'] ); ?>;} <?php } ?>


<?php if($doo_option['color_header_scroll'] != ''){ ?>.header.sticky_header .navbar-nav li a{color:<?php echo esc_attr( $doo_option['color_header_scroll'] ); ?>;} <?php } ?>

<?php if($doo_option['color_header_scroll_hover'] != ''){ ?>.header.sticky_header .navbar-nav li a:hover ,.header.sticky_header .navbar-nav li.active a  {color:<?php echo esc_attr( $doo_option['color_header_scroll_hover'] ); ?>;} <?php } ?>


<?php if($doo_option['main_color'] != ''){ ?>
    /**** Custom Main Color ****/
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    a:hover,
    .header .logo,
    .icon_box_three i,
    .icon_box_three:hover h3,
    .portfolio-categories li:hover ,
    .portfolio-categories li.active ,
    .pricing_table_one .price_set span,
    .blog_content h5,
    .blog_footer_btn a:hover,
    .team_content h3,
    .comment_tools a:hover,
    .comment_tools a:focus,
    .post.sticky:after,
    .page-breadcrumb span
    {
    color: <?php echo esc_attr( $doo_option['main_color'] ); ?> ;
    }
<?php } ?>
<?php if($doo_option['secondary_color'] != ''){ ?>
    /**** Custom secondary  Color ****/
    body,
    a,
    .icon_box_three h3,
    .icon_box_three:hover i,
    .portfolio-categories li,
    .pricing_table_one .price_set span  sup,
    .pricing_table_one:hover ul.features  li i,
    blockquote,
    blockquote:after,
    blockquote:before,
    .blog_footer_btn a,
    .team_content h6,
    .contact-form .input-group-addon,

    .pagination > li > a,
    .pagination > li > span,
    .comment_tools a,
    .widget ul a
    {
    color: <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    }
<?php } ?>

<?php if($doo_option['main_color'] != ''){ ?>
    #loader:before {
    border-top-color:  <?php echo esc_attr( $doo_option['main_color'] ); ?>;
    }
    .portfolio-categories li:hover ,.portfolio-categories li.active{
    border-bottom: solid 1px <?php echo esc_attr( $doo_option['main_color'] ); ?>;
    }

    .testimonial-box h6{
    color: <?php echo esc_attr( $doo_option['main_color'] ); ?>;

    }

    .btn_two{
    color: <?php echo esc_attr( $doo_option['main_color'] ); ?> !important;
    border:solid 1px <?php echo esc_attr( $doo_option['main_color'] ); ?> !important;;
    }
    .btn_two:hover{
    background-color: <?php echo esc_attr( $doo_option['main_color'] ); ?>;
    border:solid 1px <?php echo esc_attr( $doo_option['main_color'] ); ?>;
    }

<?php } ?>
<?php if($doo_option['secondary_color'] != ''){ ?>
    .mobile_menu_btn{
    border: solid 1px <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    }
    .mobile_menu_btn span {
    background-color: <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    }

    .section_title_two:after , .widget-title:after{
    border-bottom: 2px solid <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    }

    .pricing_one_footer .btn {
    color: #ffffff;
    border:solid 1px  <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    background-color:  <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    -webkit-transition: all .25s ease-in-out;
    -moz-transition: all .25s ease-in-out;
    transition: all .25s ease-in-out;
    }
    .pricing_table_one:hover .pricing_one_footer .btn{
    color:  <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    border:solid 1px  <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    background-color: #ffffff;
    -webkit-transition: all .25s ease-in-out;
    -moz-transition: all .25s ease-in-out;
    transition: all .25s ease-in-out;
    }
    .pricing_table_one.active .pricing_one_footer .btn{
    color:  <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    border:solid 1px  <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    background-color: #ffffff;
    -webkit-transition: all .25s ease-in-out;
    -moz-transition: all .25s ease-in-out;
    transition: all .25s ease-in-out;
    }
    .pricing_table_one.active:hover .pricing_one_footer .btn{
    color: #ffffff;
    border:solid 1px  <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    background-color:  <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    -webkit-transition: all .25s ease-in-out;
    -moz-transition: all .25s ease-in-out;
    transition: all .25s ease-in-out;
    }
    .comment_avatar:after {
    background: <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    }

    .comment_avatar img {
    border: solid 2px <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    }

    .comment_content {
    border-left: solid 2px <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    }


    .search-submit{
    background-color: <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    border: solid 1px <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;

    }
    .search-submit:hover {
    color: <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    border: solid 1px <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    }
    .widget_posts_img img{
    border: solid 1px <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    }

    .owl-theme .owl-controls .owl-page span {
    background: <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    }

    .contact-form  .submit_btn{
    background-color: <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;

    }
    .footer_social li a:hover{
    background-color: <?php echo esc_attr( $doo_option['secondary_color'] ); ?> !important;
    }

    .navigation a{
    background-color: <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    }
    .navigation a:hover{
    color: <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    }

    .btn_one{
    background-color: <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    border:solid 1px <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    }
    .btn_one:hover{
    color: <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    border:solid 1px <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    }
<?php } ?>


<?php if($doo_option['secondary_color'] != '' && $doo_option['main_color'] != ''){ ?>
    .pagination > li > a:hover,
    .pagination > li > a:focus,
    .pagination > li > span:hover,
    .pagination > li > span:focus ,
    .pagination > .active > a,
    .pagination > .active > span{
    background: <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    border-color: <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    color: <?php echo esc_attr( $doo_option['main_color'] ); ?>;
    }

    .tags a:hover,
    .tags a:focus {
    background: <?php echo esc_attr( $doo_option['secondary_color'] ); ?>;
    color: <?php echo esc_attr( $doo_option['main_color'] ); ?>;
    }


  <?php } ?>
.hero{
    background-image: url('<?php echo esc_url(  $doo_option['hero_background']['url']); ?>')
    }
.testmonial_section{
    background-image: url('<?php echo esc_url($doo_option['testimonial_background']['url']); ?>');
    }
<?php if($doo_option['custom_css'] != ''){echo esc_attr( $doo_option['custom_css'] );}  ?>