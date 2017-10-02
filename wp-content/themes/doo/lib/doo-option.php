<?php

/**
 * ReduxFramework  Config File
 * For full documentation, please visit:
 */

if ( ! class_exists( 'Redux' ) ) {
    return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "doo_option";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name'             => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name'         => $theme->get( 'Name' ),
    // Name that appears at the top of your panel
    'display_version'      => $theme->get( 'Version' ),
    // Version that appears at the top of your panel
    'menu_type'            => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu'       => true,
    // Show the sections below the admin menu item or not
    'menu_title'           => esc_html__( 'Doo Options', 'doo' ),
    'page_title'           => esc_html__( 'Doo Options', 'doo' ),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key'       => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography'     => true,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar'            => true,
    // Show the panel pages on the admin bar
    'admin_bar_icon'       => 'dashicons-portfolio',
    // Choose an icon for the admin bar menu
    'admin_bar_priority'   => 8,
    // Choose an priority for the admin bar menu
    'global_variable'      => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode'             => false,
    // Show the time the page took to load, etc
    'update_notice'        => false,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer'           => true,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

    // OPTIONAL -> Give you extra features
    'page_priority'        => 9,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent'          => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions'     => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon'            => get_template_directory_uri() . '/lib/cogwheel.png',
    // Specify a custom URL to an icon
    'last_tab'             => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon'            => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug'            => '_options',
    // Page slug used to denote the panel
    'save_defaults'        => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show'         => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark'         => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export'   => true,
    // Shows the Import/Export panel when not used as a field.

    // CAREFUL -> These options are for advanced use only
    'transient_time'       => 60 ,
    'output'               => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag'           => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database'             => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

    'use_cdn'              => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    //'compiler'             => true,

    // HINTS
    'hints'                => array(
        'icon'          => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color'    => 'lightgray',
        'icon_size'     => 'normal',
        'tip_style'     => array(
            'color'   => 'light',
            'shadow'  => true,
            'rounded' => false,
            'style'   => '',
        ),
        'tip_position'  => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect'    => array(
            'show' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'mouseover',
            ),
            'hide' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'click mouseleave',
            ),
        ),
    )
);


// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.

$args['share_icons'][] = array(
    'url'   => 'https://www.facebook.com/profile.php?id=100012760964188',
    'title' => 'follow us on Facebook',
    'icon'  => 'el el-facebook'
);
$args['share_icons'][] = array(
    'url'   => 'https://www.linkedin.com/in/mohamed-hamato-6681b588',
    'title' => 'Find us on LinkedIn',
    'icon'  => 'el el-linkedin'
);
$args['share_icons'][] = array(
    'url'   => 'https://www.linkedin.com/in/mohamed-hamato-6681b588',
    'title' => 'Find us on LinkedIn',
    'icon'  => 'el el-instegram'
);

Redux::setArgs( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 *
 * ---> START SECTIONS
 *
 */

/*

    As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


 */

// -> START Basic Fields
// -> copyright Settings
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'logo & copyright', 'doo' ),
    'desc'   => esc_html__( '', 'doo' ),
    'icon' => 'el el-home',
    'fields' => array(
        array(
            'id'       => 'doo_logo',
            'type'     => 'media',
            'title'    => esc_html__( 'Logo', 'doo' ),
            'compiler' => 'true',
            'default'  => array( 'url' => get_template_directory_uri().'/assets/img/logo.png'),
            'desc'     => "Recommended size: Max-Height: 60px and Width: 160px"
        ),array(
            'id'       => 'favicon',
            'type'     => 'media',
            'title'    => esc_html__( 'favicon', 'doo' ),
            'compiler' => 'true',
            'default'  => array( 'url' => get_template_directory_uri().'/assets/img/logo.png'),
        ),
        array(
            'id' => 'doo_copyright',
            'type' => 'text',
            'title' => esc_html__( 'Copyright Text', 'doo' ),
            'default' => esc_html__('Copyright © 2017-2018 doo. All rights reserved.', 'doo' ),
        )
    )
));

//styling option
Redux::setSection( $opt_name, array(
    'icon' => 'el-icon-website',
    'title' => esc_html__('Styling Options', 'doo'),
    'fields' => array(
        array(
            'id' => 'main_color',
            'type' => 'color',
            'title' => esc_html__('Theme Main Color', 'doo'),
            'subtitle' => esc_html__('Pick the main color for the theme (default: #0089ff).', 'doo'),
            'default' => '#0089ff',
            'validate' => 'color',
        ), array(
            'id' => 'secondary_color',
            'type' => 'color',
            'title' => esc_html__('Theme secondary Color', 'doo'),
            'subtitle' => esc_html__('Pick the secondary color for the theme (default: #0089ff).', 'doo'),
            'default' => '#68739f',
            'validate' => 'color',
        ),
        array(
            'id' => 'background_header',
            'type' => 'color',
            'title' => esc_html__('header Background Color', 'doo'),
            'subtitle' => esc_html__('Pick a background color for the header (default: rgba(255, 255, 255, 0.75)).', 'doo'),
            'default' => 'rgba(255, 255, 255, 0.75)',
            'validate' => 'color',
        ),
        array(
            'id' => 'color_header',
            'type' => 'color',
            'title' => esc_html__('header  Color', 'doo'),
            'subtitle' => esc_html__('Pick a  color for the header (default: #1c1f29).', 'doo'),
            'default' => '#1c1f29',
            'validate' => 'color',
        ),
        array(
            'id' => 'color_header_hover',
            'type' => 'color',
            'title' => esc_html__('header hover Color', 'doo'),
            'subtitle' => esc_html__('Pick a  color for the header hover (default: #000000).', 'doo'),
            'default' => '#000000',
            'validate' => 'color',
        ),
        array(
            'id' => 'background_header_scroll',
            'type' => 'color',
            'title' => esc_html__('scroll header Background Color', 'doo'),
            'subtitle' => esc_html__('Pick a background color for the scroll header (default: #FFFFFF).', 'doo'),
            'default' => '#FFFFFF',
            'validate' => 'color',
        ),
        array(
            'id' => 'color_header_scroll',
            'type' => 'color',
            'title' => esc_html__('scroll header  Color', 'doo'),
            'subtitle' => esc_html__('Pick a  color for the scroll header (default: #535c79).', 'doo'),
            'default' => '#535c79',
            'validate' => 'color',
        ),
        array(
            'id' => 'color_header_scroll_hover',
            'type' => 'color',
            'title' => esc_html__('scroll header hover Color', 'doo'),
            'subtitle' => esc_html__('Pick a  color for the scroll header hover (default: #0089ff).', 'doo'),
            'default' => '#0089ff',
            'validate' => 'color',
        ),
        array(
            'id' => 'custom_css',
            'type' => 'ace_editor',
            'title' => esc_html__('CSS Code', 'doo'),
            'subtitle' => esc_html__('Paste your CSS code here.', 'doo'),
            'mode' => 'css',
            'theme' => 'monokai',
            'default' => "#header{\nmargin: 0 auto;\n}"
        ),
    )
) );


//Typography
Redux::setSection( $opt_name, array(
    'icon' => 'el-icon-font',
    'title' => __('Typography', 'doo'),
    'fields' => array(
        array(
            'id' => 'h1_typography',
            'type' => 'typography',
            'output' => array('h1'),
            'title' => esc_html__('Heading 1', 'doo'),
            'subtitle' => esc_html__('Specify the heading 1 font properties.', 'doo'),
            'google' => true,
            'default' => array(
                'color' => '',
                'font-style'  => '',
                'font-family' => '',
                'font-size'   => '',
                'line-height' => ''
            ),
        ),
        array(
            'id' => 'h2_typography',
            'type' => 'typography',
            'output' => array('h2'),
            'title' => esc_html__('Heading 2', 'doo'),
            'subtitle' => esc_html__('Specify the heading 2 font properties.', 'doo'),
            'google' => true,
            'default' => array(
                'color' => '',
                'font-style'  => '',
                'font-family' => '',
                'font-size'   => '',
                'line-height' => ''
            ),
        ),
        array(
            'id' => 'h3_typography',
            'type' => 'typography',
            'output' => array('h3'),
            'title' => esc_html__('Heading 3', 'doo'),
            'subtitle' => esc_html__('Specify the heading 3 font properties.', 'doo'),
            'google' => true,
            'default' => array(
                'color' => '',
                'font-style'  => '',
                'font-family' => '',
                'font-size'   => '',
                'line-height' => ''
            ),
        ),
        array(
            'id' => 'h4_typography',
            'type' => 'typography',
            'output' => array('h4'),
            'title' => esc_html__('Heading 4', 'doo'),
            'subtitle' => esc_html__('Specify the heading 4 font properties.', 'doo'),
            'google' => true,
            'default' => array(
                'color' => '',
                'font-style'  => '',
                'font-family' => '',
                'font-size'   => '',
                'line-height' => ''
            ),
        ),
        array(
            'id' => 'h5_typography',
            'type' => 'typography',
            'output' => array('h5'),
            'title' => esc_html__('Heading 5', 'doo'),
            'subtitle' => esc_html__('Specify the heading 5 font properties.', 'doo'),
            'google' => true,
            'default' => array(
                'color' => '',
                'font-style'  => '',
                'font-family' => '',
                'font-size'   => '',
                'line-height' => ''
            ),
        ),
        array(
            'id' => 'h6_typography',
            'type' => 'typography',
            'output' => array('h6'),
            'title' => esc_html__('Heading 6', 'doo'),
            'subtitle' => esc_html__('Specify the heading 6 font properties.', 'doo'),
            'google' => true,
            'default' => array(
                'color' => '',
                'font-style'  => '',
                'font-family' => '',
                'font-size'   => '',
                'line-height' => ''
            ),
        ),
        array(
            'id' => 'body_font',
            'type' => 'typography',
            'output' => array('body'),
            'title' => esc_html__('Body Font', 'doo'),
            'subtitle' => esc_html__('Specify the body font properties.', 'doo'),
            'google' => true,
            'default' => array(
                'color' => '',
                'font-size' => '',
                'line-height' => '',
                'font-family' => '',
                'font-weight' => ''
            ),
        ),
    )
) );

// -> Hero section  Settings
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Hero Section', 'doo' ),
    'desc'   => esc_html__( '', 'doo' ),
    'icon' => 'el el-heart',
    'fields' => array(
        array(
            'id' => 'hero_section_style',
            'type' => 'select',
            'title' => esc_html__('Hero Section Style', 'doo'),
            'options' => array( 'full_screen' => 'Parallax background ','snow_fall' => 'Snow Falling','particles' => 'particles background',  'background_video' => 'Background Video'), //Must provide key => value pairs for radio options
            'default' => esc_html__('full_screen', 'doo'),
        ),
        array(
            'id' => 'hero_section_overlay',
            'type' => 'select',
            'title' => esc_html__('Hero Section Overlay', 'doo'),
            'options' => array( 'normal_overlay' => 'Normal Overlay', 'gradient_overlay' => 'Gradient Overlay'), //Must provide key => value pairs for radio options
            'default' => esc_html__('normal_overlay', 'doo'),
        ),
        array(
            'id'       => 'hero_background',
            'type'     => 'media',
            'required' => array('hero_section_style', '!=', 'background_video'),
            'title'    => esc_html__( 'Background image', 'doo' ),
            'default'  => array( 'url' => get_template_directory_uri().'/assets/img/bg/intro2.jpg')
        ),
        array(
            'id' => 'home-hero-video',
            'type' => 'text',
            'required' => array('hero_section_style', '=', 'background_video'),
            'title' => esc_html__('Video URL', 'doo'),
            'desc' => esc_html__('Insert Youtube resource URL', 'doo'),
            'default' => esc_html__('http://youtu.be/BsekcY04xvQ', 'doo'),
        ),
        array(
            'id' => 'heading_title_animate',
            'type' => 'select',
            'title' => esc_html__('animate or rotate heading  title', 'doo'),
            'options' => array( 'none' => 'none ', 'animate_heading' => 'animate heading ', 'rotate_heading' => 'rotate heading ' ), //Must provide key => value pairs for radio options
            'default' => 'none',
        ),array(
            'id' => 'hero_heading',
            'type' => 'text',
            'placeholder' => esc_html__('your Heading', 'doo'),
            'required' => array('heading_title_animate', '!=', 'rotate_heading'),
            'title' => esc_html__( 'hero Heading', 'doo' ),
            'default'  => esc_html__(' Creative Multipurpose Landing Page', 'doo'),
        ),array(
            'id' => 'hero_rotate_heading',
            'type' => 'text',
            'placeholder' => esc_html__('rotated Heading', 'doo'),
            'required' => array('heading_title_animate', '=', 'rotate_heading'),
            'title' => esc_html__( 'hero rotated Heading', 'doo' ),
            'default'  => esc_html__(' Creative Agency , Build Website & App , Responsive & Modern ', 'doo' ),
            'desc' =>esc_html__('Enter rotate text like this ( Creative Agency , Build Website & App , Responsive & Modern ) ','doo'),
        ),array(
            'title' =>esc_html__('Hero Description  ','doo'),
            'subtitle' =>esc_html__('Enter small text as a description  ','doo'),
            'desc' =>esc_html__('Enter small text as a description ','doo'),
            'type' =>'textarea',
            'placeholder' =>  esc_html__('your description','doo'),
            'id' =>'hero_description',
            'default'  =>  esc_html__(' Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Sed Feugiat Arcu Ut Orci Porta, Eget Porttitor Felis Suscipit. Sed A Nisl Ullamcorper, Tempus Augue At, Rutrum Lacus. Duis Et Turpis Eros.','doo'),
        ),
        array(
            'id'       => 'Hero_button_text',
            'type'     => 'text',
            'title'    => esc_html__( 'Button Text', 'doo' ),
            'desc'     => esc_html__( '' , 'doo'),
            'default'  => esc_html__('Learn More', 'doo' ),
        ),
        array(
            'id'       => 'Hero_button_link',
            'type'     => 'text',
            'placeholder' => esc_html__('Button Hiperlink', 'doo' ),
            'title'    => esc_html__( 'Button Hiperlink', 'doo' ),
            'default'  => esc_html__('#', 'doo' ),
        )
    )
));




// -> about us  section  Settings
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'welcome Section', 'doo' ),
    'desc'   => esc_html__( '', 'doo' ),
    'icon' => 'el el-key',
    'fields' => array(
        array(
            'id' => 'section_welcome_show',
            'type' => 'switch',
            'title' => esc_html__('Display Section', 'doo'),
            'default' => "1"
        ),
        array(
            'id' => 'welcome_icon',
            'type' => 'text',
            'placeholder' => esc_html__('set icon name here', 'doo' ),
            'title' => esc_html__( 'icon name', 'doo' ),
            'default' => esc_html__( " icon-lightbulb ", 'doo' ),
        ),array(
            'id'       => 'welcome_title',
            'type'     => 'text',
            'title'    => esc_html__( 'welcome title', 'doo' ),
            'placeholder' => esc_html__('title', 'doo' ),
            'default' => esc_html__( 'WELCOME TO DOO', 'doo' ),
        ),array(
            'title' =>esc_html__('welcome Description  ','doo'),
            'subtitle' =>esc_html__('Enter small text as a description  ','doo'),
            'desc' =>esc_html__('Enter small text as a description ','doo'),
            'type' =>'textarea',
            'placeholder' => esc_html__('welcome description','doo'),
            'id' =>'welcome_description',
            'default' => esc_html__("We have a number of different teams within our agency that specialise in different areas of business so you can be sure that you won’t receive a generic service and although we can’t boast years and years of service we can ensure you that is a good thing in this industry.",'doo'),
        )
    )
));
Redux::setSection( $opt_name, array(
    'title' => 'Feature One',
    'icon' => 'fa fa-envira',
    'subsection' =>'true',
    'fields' => array(
        array(
            'title' =>esc_html__('Feature ICON','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Feature ICON','doo'),
            'desc' =>esc_html__('Enter icon name here you will find icons in the documentation ','doo'),
            'id' =>'feature_one_icon',
            'default' =>"  icon-strategy"
        ),array(
            'title' =>esc_html__('Feature Title','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Feature Title','doo'),
            'id' =>'feature_one_title',
            'default' => esc_html__("Creative Design",'doo'),
        ),
        array(
            'title' =>esc_html__('Feature Description','doo'),
            'type' =>'textarea',
            'placeholder' => esc_html__('Feature Description','doo'),
            'id' =>'feature_one_text',
            'default' => esc_html__("It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",'doo'),
        )
    )
));
Redux::setSection( $opt_name, array(
    'title' => esc_html__('Feature two','doo'),
    'icon' => 'fa fa-envira',
    'subsection' =>'true',
    'fields' => array(
        array(
            'title' =>esc_html__('Feature ICON','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Feature ICON','doo'),
            'desc' =>esc_html__('Enter icon name here you will find icons in the documentation ','doo'),
            'id' =>'feature_two_icon',
            'default' => "  icon-tools"
        ),array(
            'title' =>esc_html__('Feature Title','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Feature Title','doo'),
            'id' =>'feature_two_title',
            'default' => esc_html__("Clean Code",'doo'),
        ),
        array(
            'title' =>esc_html__('Feature Description','doo'),
            'type' =>'textarea',
            'placeholder' => esc_html__('Feature Description','doo'),
            'id' =>'feature_two_text',
            'default' =>  esc_html__("It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",'doo'),
        )
    )
));
Redux::setSection( $opt_name, array(
    'title' => 'Feature three',
    'icon' => 'fa fa-envira',
    'subsection' =>'true',
    'fields' => array(
        array(
            'title' =>esc_html__('Feature ICON','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Feature ICON','doo'),
            'desc' =>esc_html__('Enter icon name here you will find icons in the documentation ','doo'),
            'id' =>'feature_three_icon',
            'default' => "  icon-chat"
        ),array(
            'title' =>esc_html__('Feature Title','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Feature Title','doo'),
            'id' =>'feature_three_title',
            'default' =>  esc_html__("Full Support",'doo'),
        ),
        array(
            'title' =>esc_html__('Feature Description','doo'),
            'type' =>'textarea',
            'placeholder' => esc_html__('Feature Description','doo'),
            'id' =>'feature_three_text',
            'default' => esc_html__("It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",'doo'),
        )
    )
));




//our services section settings
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Services Section', 'doo' ),
    'desc'   => esc_html__( '', 'doo' ),
    'icon' => 'el el-cogs',
    'fields' => array(
        array(
            'id' => 'section_services_show',
            'type' => 'switch',
            'title' => esc_html__('Display Section', 'doo'),
            'default' => "1"
        ),
        array(
            'title' =>esc_html__('Section Title ICON','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Section Title ICON','doo'),
            'desc' =>esc_html__('Enter icon name here you will find icons in the documentation ','doo'),
            'id' =>'services_title_icon',
            'default' => "icon-layers"
        ),
        array(
            'id'       => 'services_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Section  Title', 'doo' ),
            'placeholder' =>  esc_html__('Section Title', 'doo' ),
            'default' =>  esc_html__("OUR SERVICES", 'doo' ),
        ),array(
            'id' => 'services_desc',
            'type' => 'textarea',
            'placeholder' => esc_html__('Section  description', 'doo' ),
            'title' => esc_html__( 'Section description', 'doo' ),
            'default' => esc_html__("The clean and well commented code allows easy customization of the theme.It's designed for describing your app, agency or business.", 'doo' ),
        ),array(
            'id' => 'section_services_info',
            'type' => 'info',
            'title' => esc_html__("Create a new Services from services in the sidebar", 'doo'  ),
            'style' => 'success'
        ),
    )
));


//our portfolio section settings
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Portfolio Section', 'doo' ),
    'desc'   => esc_html__( '', 'doo' ),
    'icon' => 'el el-photo',
    'fields' => array(
        array(
            'id' => 'section_portfolio_show',
            'type' => 'switch',
            'title' => esc_html__('Display Section', 'doo'),
            'default' => "1"
        ),
        array(
            'title' =>esc_html__('Section Title ICON','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Section Title ICON','doo'),
            'desc' =>esc_html__('Enter icon name here you will find icons in the documentation ','doo'),
            'id' =>'portfolio_title_icon',
            'default' => " icon-pictures"
        ),
        array(
            'id'       => 'portfolio_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Section  Title', 'doo' ),
            'placeholder' => esc_html__('Section Title', 'doo' ),
            'default' => esc_html__("OUR PROJECTS", 'doo' ),
        ),array(
            'id' => 'portfolio_desc',
            'type' => 'textarea',
            'placeholder' =>  esc_html__('Section  description ', 'doo' ),
            'title' => esc_html__( 'Section description', 'doo' ),
            'default' =>  esc_html__("The clean and well commented code allows easy customization of the theme.It's designed for describing your app, agency or business.", 'doo' ),
        ),array(
            'id' => 'section_portfolio_info',
            'type' => 'info',
            'title' => esc_html__('Create a new portfolio from portfolio in sidebar menu', 'doo'),
            'style' => 'success'
        ),
    )
));



// -> counter  section  Settings
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Numbers Facts', 'doo' ),
    'desc'   => esc_html__( '', 'doo' ),
    'icon' => 'el el-time',
    'fields' => array(
        array(
            'id' => 'section_counter_show',
            'type' => 'switch',
            'title' => esc_html__('Display Section', 'doo'),
            'default' => "1"
        )
    )
));
Redux::setSection( $opt_name, array(
    'title' => 'Counter One',
    'icon' => 'fa fa-envira',
    'subsection' =>'true',
    'fields' => array(
        array(
            'title' =>esc_html__('Counter ICON','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Counter ICON','doo'),
            'desc' =>esc_html__('Enter icon name here you will find icons in the documentation ','doo'),
            'id' =>'counter_one_icon',
            'default' => "icon-linegraph"
        ),array(
            'title' =>esc_html__('Counter Title','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Counter Title','doo'),
            'id' =>'counter_one_title',
            'default' => esc_html__("Projects Completed",'doo'),
        ),
        array(
            'title' =>esc_html__('Counter Value','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Counter Value in numbers','doo'),
            'id' =>'counter_one_value',
            'default' => esc_html__("276",'doo'),
        )
    )
));
Redux::setSection( $opt_name, array(
    'title' => 'Counter two',
    'icon' => 'fa fa-envira',
    'subsection' =>'true',
    'fields' => array(
        array(
            'title' =>esc_html__('Counter ICON','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Counter ICON','doo'),
            'desc' =>esc_html__('Enter icon name here you will find icons in the documentation ','doo'),
            'id' =>'counter_two_icon',
            'default' => " icon-heart"
        ),array(
            'title' =>esc_html__('Counter Title','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Counter Title','doo'),
            'id' =>'counter_two_title',
            'default' => esc_html__("Happy Customer",'doo'),
        ),
        array(
            'title' =>esc_html__('Counter Value','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Counter Value  in numbers','doo'),
            'id' =>'counter_two_value',
            'default' => esc_html__("120",'doo'),
        )
    )
));
Redux::setSection( $opt_name, array(
    'title' => 'Counter three',
    'icon' => 'fa fa-envira',
    'subsection' =>'true',
    'fields' => array(
        array(
            'title' =>esc_html__('Counter ICON','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Counter ICON','doo'),
            'desc' =>esc_html__('Enter icon name here you will find icons in the documentation ','doo'),
            'id' =>'counter_three_icon',
            'default' => " icon-wine"
        ),array(
            'title' =>esc_html__('Counter Title','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Counter Title','doo'),
            'id' =>'counter_three_title',
            'default' => esc_html__("Positive Feedbacks",'doo'),
        ),
        array(
            'title' =>esc_html__('Counter Value','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Counter Value  in numbers','doo'),
            'id' =>'counter_three_value',
            'default' => esc_html__("300",'doo'),
        )
    )
));
Redux::setSection( $opt_name, array(
    'title' => 'Counter four',
    'icon' => 'fa fa-envira',
    'subsection' =>'true',
    'fields' => array(
        array(
            'title' =>esc_html__('Counter ICON','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Counter ICON','doo'),
            'desc' =>esc_html__('Enter icon name here you will find icons in the documentation ','doo'),
            'id' =>'counter_four_icon',
            'default' => " icon-genius"
        ),array(
            'title' =>esc_html__('Counter Title','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Counter Title','doo'),
            'id' =>'counter_four_title',
            'default' => esc_html__("Working Hours",'doo'),
        ),
        array(
            'title' =>esc_html__('Counter Value','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Counter Value  in numbers','doo'),
            'id' =>'counter_four_value',
            'default' => esc_html__("2800",'doo'),
        )
    )
));


// -> price  section  Settings
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'our price Section', 'doo' ),
    'desc'   => esc_html__( '', 'doo' ),
    'icon' => 'el el-usd',
    'fields' => array(
        array(
            'id' => 'section_price_show',
            'type' => 'switch',
            'title' => esc_html__('Display Section', 'doo'),
            'default' => "1"
        ),
        array(
            'title' =>esc_html__('Section Title ICON','doo'),
            'type' =>'text',
            'placeholder' =>  esc_html__( 'Section Title ICON','doo'),
            'desc' =>esc_html__('Enter icon name here you will find icons in the documentation ','doo'),
            'id' =>'price_title_icon',
            'default' => "icon-wallet"
        ),
        array(
            'id'       => 'price_title',
            'type'     => 'text',
            'title'    => esc_html__( 'price title', 'doo' ),
            'placeholder' => esc_html__( 'price title', 'doo' ),
            'default' =>  esc_html__( "Service Prices", 'doo' ),
        ),array(
            'id' => 'price_desc',
            'type' => 'textarea',
            'placeholder' => esc_html__( 'price description', 'doo' ),
            'title' => esc_html__( 'price description', 'doo' ),
            'default' => esc_html__("The clean and well commented code allows easy customization of the theme.It's designed for describing your app, agency or business.", 'doo' ),
        )
    )
));
Redux::setSection( $opt_name, array(
    'title' => 'Price plan One',
    'subsection' =>'true',
    'fields' => array(
        array(
            'title' =>esc_html__('Plan Name','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Plan Name','doo'),
            'id' =>'plan_one_name',
            'default' => esc_html__( " Regular",'doo'),
        ),array(
            'title' =>esc_html__('Plan for','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Plan for','doo'),
            'id' =>'plan_one_for',
            'default' => esc_html__( " For Freelancer ",'doo'),
        ),array(
            'title' =>esc_html__('Plan price','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Plan price','doo'),
            'desc' =>esc_html__('Enter Plan price for the month here ','doo'),
            'id' =>'plan_one_price',
            'default' => esc_html__("49",'doo'),
        ),array(
            'title' =>esc_html__('plan Features','doo'),
            'type' =>'multi_text',
            'placeholder' => esc_html__('plan Features','doo'),
            'desc' =>esc_html__('Enter Plan Feature here ','doo'),
            'id' =>'plan_one_feature',
            'default' => array(
                esc_html__('24/7 TECH SUPPORT','doo'),
                esc_html__('Email Addresses','doo'),
                esc_html__(' Domains','doo'),
                esc_html__(' 24x7 Support','doo'),
                esc_html__('Free Installation','doo'),
                esc_html__(' Enhanced Security','doo'),
            ),
        ),array(
            'title' =>esc_html__('Plan Button Text','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Plan Button Text','doo'),
            'id' =>'plan_one_btn_text',
            'default' =>  esc_html__("Buy Now",'doo'),
        ),array(
            'title' =>esc_html__('Plan Button Hiperlink','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Plan Button Hiperlink','doo'),
            'desc' =>esc_html__('if you went this button redirect the user to contact us enter this link (#contact)','doo'),
            'id' =>'plan_one_btn_url',
            'default' => esc_html__("#",'doo'),
        )
    )
));
Redux::setSection( $opt_name, array(
    'title' => 'Price plan two',
    'subsection' =>'true',
    'fields' => array(
        array(
            'title' =>esc_html__('Plan Name','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Plan Name','doo'),
            'id' =>'plan_two_name',
            'default' => esc_html__(" Professional",'doo'),
        ),array(
            'title' =>esc_html__('Plan for','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Plan for','doo'),
            'id' =>'plan_two_for',
            'default' => esc_html__( " For Agancy ",'doo'),
        ),array(
            'title' =>esc_html__('Plan price','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Plan price','doo'),
            'desc' =>esc_html__('Enter Plan price for the month here ','doo'),
            'id' =>'plan_two_price',
            'default' => esc_html__(" 149",'doo'),
        ),
        array(
            'title' =>esc_html__('plan Features','doo'),
            'type' =>'multi_text',
            'placeholder' => esc_html__('plan Features','doo'),
            'desc' =>esc_html__('Enter Plan Feature here ','doo'),
            'id' =>'plan_two_feature',
            'default' => array(
                esc_html__('24/7 TECH SUPPORT','doo'),
                esc_html__('Email Addresses','doo'),
                esc_html__(' Domains','doo'),
                esc_html__(' 24x7 Support','doo'),
                esc_html__('Free Installation','doo'),
                esc_html__(' Enhanced Security','doo'),
            ),
        ),array(
            'title' =>esc_html__('Plan Button Text','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Plan Button Text','doo'),
            'id' =>'plan_two_btn_text',
            'default' =>  esc_html__("Buy Now",'doo'),
        ),array(
            'title' =>esc_html__('Plan Button Hiperlink','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Plan Button Hiperlink','doo'),
            'desc' =>esc_html__('if you went this button redirect the user to contact us enter this link (#contact)','doo'),
            'id' =>'plan_two_btn_url',
            'default' => esc_html__("#",'doo'),
        )
    )
));
Redux::setSection( $opt_name, array(
    'title' => 'Price plan three',
    'subsection' =>'true',
    'fields' => array(
        array(
            'title' => esc_html__('Plan Name','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Plan Name','doo'),
            'id' =>'plan_three_name',
            'default' => esc_html__(" Developer",'doo'),
        ),array(
            'title' =>esc_html__('Plan for','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Plan for','doo'),
            'id' =>'plan_three_for',
            'default' => esc_html__( " For  Big Company ",'doo'),
        ),array(
            'title' => esc_html__('Plan price','doo'),
            'type' =>'text',
            'placeholder' =>  esc_html__('Plan price','doo'),
            'desc' =>esc_html__('Enter Plan price for the month here ','doo'),
            'id' =>'plan_three_price',
            'default' => esc_html__(" 249",'doo'),
        ),array(
            'title' =>esc_html__('plan Features','doo'),
            'type' =>'multi_text',
            'placeholder' => esc_html__('plan Features','doo'),
            'desc' =>esc_html__('Enter Plan Feature here ','doo'),
            'id' =>'plan_three_feature',
            'default' => array(
                esc_html__('24/7 TECH SUPPORT','doo'),
                esc_html__('Email Addresses','doo'),
                esc_html__(' Domains','doo'),
                esc_html__(' 24x7 Support','doo'),
                esc_html__('Free Installation','doo'),
                esc_html__(' Enhanced Security','doo'),
            ),
        ),array(
            'title' =>esc_html__('Plan Button Text','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Plan Button Text','doo'),
            'id' =>'plan_three_btn_text',
            'default' => esc_html__(" Buy Now",'doo'),
        ),array(
            'title' =>esc_html__('Plan Button Hiperlink','doo'),
            'type' =>'text',
            'placeholder' =>esc_html__('Plan Button Hiperlink','doo'),
            'desc' =>esc_html__('if you went this button redirect the user to contact us enter this link (#contact)','doo'),
            'id' =>'plan_three_btn_url',
            'default' => esc_html__("#",'doo'),
        )
    )
));


//our team section settings
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Team Section', 'doo' ),
    'desc'   => esc_html__( '', 'doo' ),
    'icon' => 'el el-torso',
    'fields' => array(
        array(
            'id' => 'section_team_show',
            'type' => 'switch',
            'title' => esc_html__('Display Section', 'doo'),
            'default' => "1"
        ),
        array(
            'title' =>esc_html__('Section Title ICON','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Section Title ICON','doo'),
            'desc' =>esc_html__('Enter icon name here you will find icons in the documentation ','doo'),
            'id' =>'team_title_icon',
            'default' => "icon-profile-male"
        ),
        array(
            'id'       => 'team_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Section Title', 'doo' ),
            'placeholder' =>  esc_html__('Section Title', 'doo' ),
            'default' =>  esc_html__("Our Team", 'doo' ),
        ),array(
            'id' => 'team_desc',
            'type' => 'textarea',
            'placeholder' => esc_html__( 'Section  description', 'doo' ),
            'title' => esc_html__( 'Section description', 'doo' ),
            'default' => esc_html__( "The clean and well commented code allows easy customization of the theme.It's designed for describing your app, agency or business.", 'doo' ),
        ),array(
            'id' => 'section_team_info',
            'type' => 'info',
            'title' => esc_html__('Create a new Team Member from team in sidebar menu', 'doo'),
            'style' => 'success'
        ),
    )
));

// blog section settings
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Blog Section', 'doo' ),
    'desc'   => esc_html__( '', 'doo' ),
    'icon' => 'el el-website',
    'fields' => array(
        array(
            'id' => 'section_blog_show',
            'type' => 'switch',
            'title' => esc_html__('Display Section', 'doo'),
            'default' => "1"
        ),
        array(
            'title' =>esc_html__('Section Title ICON','doo'),
            'type' =>'text',
            'placeholder' => esc_html__('Section Title ICON','doo'),
            'desc' =>esc_html__('Enter icon name here you will find icons in the documentation ','doo'),
            'id' =>'blog_title_icon',
            'default' => esc_html__( "icon-global", 'doo' ),
        ),
        array(
            'id'       => 'blog_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Section  Title', 'doo' ),
            'placeholder' => esc_html__( 'Section Title', 'doo' ),
            'default' => esc_html__( "OUR BLOG", 'doo' ),
        ),array(
            'id' => 'blog_section_desc',
            'type' => 'textarea',
            'placeholder' =>  esc_html__( 'Section description', 'doo' ),
            'title' => esc_html__( 'Section description', 'doo' ),
            'default' => esc_html__( "The clean and well commented code allows easy customization of the theme", 'doo' ),
        ),
        array(
            'id'       => 'blog_header_background',
            'type'     => 'media',
            'title'    => esc_html__( 'blog header background image', 'doo' ),
            'default'  => array( 'url' => get_template_directory_uri().'/assets/img/bg/intro4.jpg')
        )
    )
));


// -> testimonial  section  Settings
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Testimonial Section', 'doo' ),
    'desc'   => esc_html__( '', 'doo' ),
    'icon' => 'el el-time',
    'fields' => array(
        array(
            'id' => 'section_testimonial_show',
            'type' => 'switch',
            'title' => esc_html__('Display Section', 'doo'),
            'default' => "1"
        ),
        array(
            'id'       => 'testimonial_background',
            'type'     => 'media',
            'title'    => esc_html__( 'background image', 'doo' ),
            'default'  => array( 'url' => get_template_directory_uri().'/assets/img/bg/intro3.jpg'),
        ),array(
            'id' => 'section_testimonial_info',
            'type' => 'info',
            'title' => esc_html__('Create a new testimonial from  testimonial in sidebar  ', 'doo'),
            'style' => 'success'
        ),
    )
));

// -> brands  section  Settings
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'brands Section', 'doo' ),
    'desc'   => esc_html__( '', 'doo' ),
    'icon' => 'el el-livejournal',
    'fields' => array(
        array(
            'id' => 'section_brands_show',
            'type' => 'switch',
            'title' => esc_html__('Display Section', 'doo'),
            'default' => "1"
        ),array(
            'id' => 'section_brands_info',
            'type' => 'info',
            'title' => esc_html__('add a new brand from  brands in sidebar  ', 'doo'),
            'style' => 'success'
        ),
    )
));

// contact us section settings
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Contact us  Section', 'doo' ),
    'desc'   => esc_html__( '', 'doo' ),
    'icon' => 'el el-comment-alt',
    'fields' => array(
        array(
            'id' => 'section_contact_us_show',
            'type' => 'switch',
            'title' => esc_html__('Display Section', 'doo'),
            'default' => "1",
        ),
        array(
            'title' =>esc_html__('Section Title ICON','doo'),
            'type' =>'text',
            'placeholder' =>  esc_html__('Section Title ICON','doo'),
            'desc' =>esc_html__('Enter icon name here you will find icons in the documentation ','doo'),
            'id' =>'contact_us_title_icon',
            'default' => esc_html__( " icon-chat", 'doo' ),
        ),
        array(
            'id'       => 'contact_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Section  Title', 'doo' ),
            'placeholder' => esc_html__('Section  Title', 'doo' ),
            'default' => esc_html__("Contact us", 'doo' ),
        ),array(
            'id' => 'contact_desc',
            'type' => 'text',
            'placeholder' => esc_html__('Section  description', 'doo' ),
            'title' => esc_html__( 'Section description', 'doo' ),
            'default' => esc_html__("The clean and well commented code allows easy customization of the theme", 'doo' ),
        ),array(
            'id' => 'contact_us_divide',
            'type' => 'info',
            'desc' =>esc_html__('Enter contact information blow ','doo'),
        ),array(
            'id' => 'contact_us_email',
            'type' => 'text',
            'placeholder' => esc_html__('contact us email', 'doo' ),
            'title' => esc_html__( 'contact us email', 'doo' ),
            'default' => esc_html__("email@doo.com", 'doo' ),
        ),array(
            'id' => 'contact_us_phone',
            'type' => 'text',
            'placeholder' => esc_html__( 'contact us phone', 'doo' ),
            'title' => esc_html__( 'contact us phone', 'doo' ),
            'default' => esc_html__( "123 456-7890", 'doo' ),
        ),array(
            'id' => 'contact_us_address',
            'type' => 'text',
            'placeholder' => esc_html__('contact us address', 'doo' ),
            'title' => esc_html__( 'contact us address', 'doo' ),
            'default' => esc_html__("123 hosary st, 6 October Egypt.", 'doo' ),
        ),array(
            'id' => 'contact_us_social',
            'type' => 'info',
            'desc' =>esc_html__('Enter social media information blow ','doo'),
        ),array(
            'id' => 'fb_account',
            'type' => 'text',
            'placeholder' => esc_html__('facebook page url ', 'doo' ),
            'title' => esc_html__( 'facebook page url ', 'doo' ),
            'default' => esc_html__("#", 'doo' ),

        ),array(
            'id' => 'tw_account',
            'type' => 'text',
            'placeholder' => esc_html__( 'twitter  url ', 'doo' ),
            'title' => esc_html__( 'twitter  url ', 'doo' ),
            'default' => esc_html__( "#", 'doo' ),

        ),array(
            'id' => 'ins_account',
            'type' => 'text',
            'placeholder' => esc_html__( 'instagram  url ', 'doo' ),
            'title' => esc_html__( 'instagram  url ', 'doo' ),
            'default' => esc_html__( "#", 'doo' ),
        ),array(
            'id' => 'gb_account',
            'type' => 'text',
            'placeholder' => esc_html__( 'google plus page url ', 'doo' ),
            'title' => esc_html__( 'google plus page url ', 'doo' ),
            'default' => esc_html__( "#", 'doo' ),
        ),array(
            'id' => 'linked_account',
            'type' => 'text',
            'placeholder' => esc_html__( 'linked-in page url ', 'doo' ),
            'title' => esc_html__( 'linked-in page url ', 'doo' ),
            'default' => esc_html__( "#", 'doo' ),
        ),array(
            'id' => 'contact_us_map',
            'type' => 'info',
            'desc' =>esc_html__('Enter map iframe here ','doo'),
        ),array(
            'id' => 'map_src',
            'type' => 'textarea',
            'placeholder' => esc_html__('Enter map iframe ', 'doo' ),
            'title' => esc_html__( 'Enter map iframe ', 'doo' ),
            'default' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.229809232097!2d30.945989785461236!3d29.97282488190839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145856f78386e6a9%3A0x5024fd9866839e3d!2z2YXYs9is2K8g2KfZhNit2LXYsdmJ!5e0!3m2!1sar!2s!4v1479871181772" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
            'desc' =>__("check this page <a target='_blank' href='https://en.support.wordpress.com/google-maps/'>google maps</a>  or the Documentation ",'doo'),

        ),array(
            'id' => 'contact_form',
            'type' => 'editor',
            'title' => esc_html__( 'Enter contact form  ', 'doo' ),

        )


    )
));

// 404 section settings
Redux::setSection( $opt_name, array(
    'icon' => 'el el-fire',
    'title' => esc_html__('404 Settings', 'doo'),
    'fields' => array(
        array(
            'id' => '404_title',
            'type' => 'text',
            'title' => esc_html__('404 Title', 'doo'),
            'subtitle' => esc_html__('enter 404 Title', 'doo'),
            'desc' => esc_html__('', 'doo'),
            'default' => esc_html__('404', 'doo'),
        ),
        array(
            'id' => '404_content',
            'type' => 'editor',
            'title' => esc_html__('404 massage', 'doo'),
            'subtitle' => esc_html__('Enter 404 massage', 'doo'),
            'desc' => esc_html__('', 'doo'),
            'default' => esc_html__('The page you are looking for no longer exists. Perhaps you can return back to the sites homepage see you can find what you are looking for.', 'doo'),
        ),
        array(
            'id' => 'back_404',
            'type' => 'text',
            'title' => esc_html__('Button Back Home', 'doo'),
            'desc' => esc_html__('Text Button Go To Home.', 'doo'),
            'subtitle' => esc_html__('', 'doo'),
            'default' => esc_html__('Back To Home', 'doo'),
        ),
        array(
            'id'       => 'notfound_background',
            'type'     => 'media',
            'title'    => esc_html__( '404 background image', 'doo' ),
            'default'  => array( 'url' => get_template_directory_uri().'/assets/img/bg/snow.jpg')
        )
    )
) );



/*
 * <--- END SECTIONS
 */
