<?php

/**

 * Plugin Name: doo-section

 * Plugin URI: https://themeforest.net/user/pharaohlab
 * Description: A plugin to create a custom post type for doo THEME

 * Version:  1.0

 * Author: MOHAMED HAMATO

 * Author URI:https://themeforest.net/user/pharaohlab/portfolio

 * License:  http://themeforest.net/licenses/regular_extended

 */


function doo_sections()
{
    // Services Section
    $labels1 = array(
        'name' => esc_html__('services',  'doo'),
        'singular_name' => esc_html__('services',  'doo'),
        'menu_name' => esc_html__('Services', 'doo'),
        'parent_item_colon' => esc_html__('Parent service:', 'doo'),
        'all_items' => esc_html__('All services', 'doo'),
        'view_item' => esc_html__('View services', 'doo'),
        'add_new_item' => esc_html__('Add New service', 'doo'),
        'add_new' => esc_html__('New service', 'doo'),
        'edit_item' => esc_html__('Edit service', 'doo'),
        'update_item' => esc_html__('Update service', 'doo'),
        'search_items' => esc_html__('Search services', 'doo'),
        'not_found' => esc_html__('No service found', 'doo'),
        'not_found_in_trash' => esc_html__('No service found in Trash', 'doo'),
    );
    $args1 = array(
        'label' => esc_html__('service', 'doo'),
        'description' => esc_html__('service', 'doo'),
        'labels' => $labels1,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 4,
        'menu_icon' => WP_PLUGIN_URL . '/doo/icons/serv.png',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('service', $args1);

    // Portfolio Section

    $labels2 = array(
        'name' => esc_html__('Porftolio',  'doo'),
        'singular_name' => esc_html__('Portfolio',  'doo'),
        'menu_name' => esc_html__('Porftolio', 'doo'),
        'parent_item_colon' => esc_html__('Parent Portfolio:', 'doo'),
        'all_items' => esc_html__('All Porftolio', 'doo'),
        'view_item' => esc_html__('View Portfolio', 'doo'),
        'add_new_item' => esc_html__('Add New Portfolio', 'doo'),
        'add_new' => esc_html__('New Portfolio', 'doo'),
        'edit_item' => esc_html__('Edit Portfolio', 'doo'),
        'update_item' => esc_html__('Update Portfolio', 'doo'),
        'search_items' => esc_html__('Search Porftolio', 'doo'),
        'not_found' => esc_html__('No Portfolio found', 'doo'),
        'not_found_in_trash' => esc_html__('No Porftolio found in Trash', 'doo'),
    );
    $args2 = array(
        'label' => esc_html__('Portfolio', 'doo'),
        'description' => esc_html__('Portfolio', 'doo'),
        'labels' => $labels2,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => WP_PLUGIN_URL . '/doo/icons/port.png',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('Portfolio', $args2);


    // Team section
    $labels1 = array(
        'name' => esc_html__('team', 'doo'),
        'singular_name' => esc_html__('team',  'doo'),
        'menu_name' => esc_html__('Team', 'doo'),
        'parent_item_colon' => esc_html__('Parent team:', 'doo'),
        'all_items' => esc_html__('All team', 'doo'),
        'view_item' => esc_html__('View team', 'doo'),
        'add_new_item' => esc_html__('Add New team', 'doo'),
        'add_new' => esc_html__('New team member', 'doo'),
        'edit_item' => esc_html__('Edit team', 'doo'),
        'update_item' => esc_html__('Update team', 'doo'),
        'search_items' => esc_html__('Search team', 'doo'),
        'not_found' => esc_html__('No team found', 'doo'),
        'not_found_in_trash' => esc_html__('No team found in Trash', 'doo'),
    );
    $args1 = array(
        'label' => esc_html__('team', 'doo'),
        'description' => esc_html__('team', 'doo'),
        'labels' => $labels1,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 6,
        'menu_icon' => WP_PLUGIN_URL . '/doo/icons/team.png',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('team', $args1);




    // Testimonial Section

    $labels4 = array(
        'name' => esc_html__('Testimonials', 'doo'),
        'singular_name' => esc_html__('Testimonial', 'doo'),
        'menu_name' => esc_html__('Testimonials', 'doo'),
        'parent_item_colon' => esc_html__('Parent Testimonial:', 'doo'),
        'all_items' => esc_html__('All Testimonials', 'doo'),
        'view_item' => esc_html__('View Testimonial', 'doo'),
        'add_new_item' => esc_html__('Add New Testimonial', 'doo'),
        'add_new' => esc_html__('New Testimonial', 'doo'),
        'edit_item' => esc_html__('Edit Testimonial', 'doo'),
        'update_item' => esc_html__('Update Testimonial', 'doo'),
        'search_items' => esc_html__('Search Testimonials', 'doo'),
        'not_found' => esc_html__('No testimonial found', 'doo'),
        'not_found_in_trash' => esc_html__('No testimonials found in Trash', 'doo'),
    );
    $args4 = array(
        'label' => esc_html__('Testimonial', 'doo'),
        'description' => esc_html__('Testimonial', 'doo'),
        'labels' => $labels4,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 7,
        'menu_icon' => WP_PLUGIN_URL . '/doo/icons/test.png',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('testimonial', $args4);


    // brands Section

    $labels5 = array(
        'name' => esc_html__('brands',  'doo'),
        'singular_name' => esc_html__('brands',  'doo'),
        'menu_name' => esc_html__('brands', 'doo'),
        'parent_item_colon' => esc_html__('Parent brand:', 'doo'),
        'all_items' => esc_html__('All brands', 'doo'),
        'view_item' => esc_html__('View brands', 'doo'),
        'add_new_item' => esc_html__('Add New brand', 'doo'),
        'add_new' => esc_html__('New brand', 'doo'),
        'edit_item' => esc_html__('Edit brands', 'doo'),
        'update_item' => esc_html__('Update brands', 'doo'),
        'search_items' => esc_html__('Search brands', 'doo'),
        'not_found' => esc_html__('No brands found', 'doo'),
        'not_found_in_trash' => esc_html__('No brands found in Trash', 'doo'),
    );
    $args5 = array(
        'label' => esc_html__('brands', 'doo'),
        'description' => esc_html__('brands', 'doo'),
        'labels' => $labels5,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 8,
        'menu_icon' => WP_PLUGIN_URL . '/doo/icons/reunion.png',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('brands', $args5);



}

add_action('init', 'doo_sections', 0);


// Portfolio Section filters
add_action( 'init', 'doo_register_taxonomy_filters' );

function doo_register_taxonomy_filters() {
    $labels = array(
        'name' => esc_html__( 'Filters', 'doo' ),
        'singular_name' => esc_html__( 'Filter', 'doo' ),
        'search_items' => esc_html__( 'Search Filters', 'doo' ),
        'popular_items' => esc_html__( 'Popular Filters', 'doo' ),
        'all_items' => esc_html__( 'All Filters', 'doo' ),
        'parent_item' => esc_html__( 'Parent Filter', 'doo' ),
        'parent_item_colon' => esc_html__( 'Parent Filter:', 'doo' ),
        'edit_item' => esc_html__( 'Edit Filter', 'doo' ),
        'update_item' => esc_html__( 'Update Filter', 'doo' ),
        'add_new_item' => esc_html__( 'Add New Filter', 'doo' ),
        'new_item_name' => esc_html__( 'New Filter', 'doo' ),
        'separate_items_with_commas' => esc_html__( 'Separate Filters with commas', 'doo' ),
        'add_or_remove_items' => esc_html__( 'Add or remove Filters', 'doo' ),
        'choose_from_most_used' => esc_html__( 'Choose from the most used Filters', 'doo' ),
        'menu_name' => esc_html__( 'Filters', 'doo' ),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'filters', array('portfolio'), $args );
}




//Services Section fields

// hook the function to the cmb2_init action
add_action( 'cmb2_init', 'doo_services_metabox' );

// create the function that creates metaboxes and populates them with fields
function doo_services_metabox() {

    // create the metabox
    $services = new_cmb2_box( array(
        'id'            => 'services_metabox',
        'title'         =>  esc_html__('add new service (Latest service will be displayed on top)',"doo"),
        'object_types'  => array( 'service' ), // post type
        'context'       => 'normal', // 'normal', 'advanced' or 'side'
        'priority'      => 'high', // 'high', 'core', 'default' or 'low'
        'show_names'    => true, // show field names on the left
    ) );

    // Service Icon
    $services->add_field( array(
        'name' =>  esc_html__('Service Icon ',"doo"),
        'type'  => 'text', // This field type
        'id'   => 'service_icon',
        'desc' =>  esc_html__('Enter The Name Of The Icon Here ( check the Documentation )',"doo"),
    ) );

    // Service text
    $services->add_field( array(
        'name' =>  esc_html__('Service Small Description',"doo"),
        'id'   => 'service_small_desc',
        'type' => 'textarea',
        'desc' =>  esc_html__('Enter a small Description Of The Service Here',"doo"),
    ) );


}



//portfolio Section fields

// hook the function to the cmb2_init action
add_action( 'cmb2_init', 'doo_portfolio_metabox' );

// create the function that creates metaboxes and populates them with fields
function doo_portfolio_metabox() {

    // create the metabox
    $portfolio = new_cmb2_box( array(
        'id'            => 'portfolio_metabox',
        'title'         => esc_html__('add new portfolio',"doo"),
        'object_types'  => array( 'portfolio' ), // post type
        'context'       => 'normal', // 'normal', 'advanced' or 'side'
        'priority'      => 'high', // 'high', 'core', 'default' or 'low'
        'show_names'    => true, // show field names on the left
    ) );

    // Portfolio Image
    $portfolio->add_field( array(
        'name' => esc_html__('Portfolio Image ',"doo"),
        'type'  => 'file', // This field type
        'id'   => 'portfolio_img_small',
        'desc' => esc_html__('upload portfolio image here ',"doo"),
    ) );

    // Portfolio large Image
    $portfolio->add_field( array(
        'name' => esc_html__('Portfolio large Image ',"doo"),
        'type'  => 'file', // This field type
        'id'   => 'portfolio_img_large',
        'desc' => esc_html__('upload portfolio large image here ',"doo"),
    ) );

}




//Team Section fields

// hook the function to the cmb2_init action
add_action( 'cmb2_init', 'doo_team_metabox' );

// create the function that creates metaboxes and populates them with fields
function doo_team_metabox() {

    // create the metabox
    $team = new_cmb2_box( array(
        'id'            => 'team_metabox',
        'title'         => esc_html__('add new team member',"doo"),
        'object_types'  => array( 'team' ), // post type
        'context'       => 'normal', // 'normal', 'advanced' or 'side'
        'priority'      => 'high', // 'high', 'core', 'default' or 'low'
        'show_names'    => true, // show field names on the left
    ) );

    // Team member Image
    $team->add_field( array(
        'name' => esc_html__('Team member Image ',"doo"),
        'type'  => 'file', // This field type
        'id'   => 'team_member_image',
        'desc' => esc_html__('upload member image here ',"doo"),
    ) );

    // Team member position
    $team->add_field( array(
        'name' => esc_html__('Team member position ',"doo"),
        'type'  => 'text', // This field type
        'id'   => 'team_member_position',
        'desc' => esc_html__('enter team member position here ',"doo"),
    ) );

    // Team member social
    $team->add_field( array(
        'name' => esc_html__('Facebook Link',"doo"),
        'id' => 'team_facebook_link',
        'type' => 'text',
        'desc' => esc_html__('enter team member Facebook Link here ',"doo"),

    ));
    $team->add_field( array(
        'name' => esc_html__('Twitter Link',"doo"),
        'id' => 'team_twitter_link',
        'type' => 'text',
        'desc' => esc_html__('enter team member Twitter Link here ',"doo"),
    ));
    $team->add_field(  array(
        'name' => esc_html__('Linkedin Link',"doo"),
        'id' => 'team_linkedin_link',
        'type' => 'text',
        'desc' => esc_html__('enter team member Linkedin Link here',"doo"),
    ));
    $team->add_field(  array(
        'name' => esc_html__('instagram Link',"doo"),
        'id' =>  'team_instagram_link',
        'type' => 'text',
        'desc' => esc_html__('enter team member instagram Link here ',"doo"),
    ));

}



//testimonial Section fields

// hook the function to the cmb2_init action
add_action( 'cmb2_init', 'doo_testimonial_metabox' );

// create the function that creates metaboxes and populates them with fields
function doo_testimonial_metabox() {

    // create the metabox
    $testimonial = new_cmb2_box( array(
        'id'            => 'testimonial_metabox',
        'title'         =>  esc_html__('add new testimonial',"doo"),
        'object_types'  => array( 'testimonial' ), // post type
        'context'       => 'normal', // 'normal', 'advanced' or 'side'
        'priority'      => 'high', // 'high', 'core', 'default' or 'low'
        'show_names'    => true, // show field names on the left
    ) );

    // testimonial
    $testimonial->add_field(array(
        'name' => esc_html__('Testimonial image ',"doo"),
        'id' => 'test_image',
        'type' => 'file'
    ) );
    $testimonial->add_field( array(
        'name' => esc_html__('job of the Person ',"doo"),
        'id' => 'test_job',
        'type' => 'text_medium'
    ) );
    $testimonial->add_field(  array(
        'name' => esc_html__('Testimonial ',"doo"),
        'id' => 'test_description',
        'type' => 'textarea'
    ) );

}


//brands Section fields

// hook the function to the cmb2_init action
add_action( 'cmb2_init', 'doo_brands_metabox' );

// create the function that creates metaboxes and populates them with fields
function doo_brands_metabox() {

    // create the metabox
    $brands = new_cmb2_box( array(
        'id'            => 'brands_metabox',
        'title'         => esc_html__('add new brand',"doo"),
        'object_types'  => array( 'brands' ), // post type
        'context'       => 'normal', // 'normal', 'advanced' or 'side'
        'priority'      => 'high', // 'high', 'core', 'default' or 'low'
        'show_names'    => true, // show field names on the left
    ) );

    // brands Image
    $brands->add_field( array(
        'name' => esc_html__('brand Image ',"doo"),
        'type'  => 'file', // This field type
        'id'   => 'brand_img',
        'desc' => esc_html__('upload brand image here ',"doo"),
    ) );


}
