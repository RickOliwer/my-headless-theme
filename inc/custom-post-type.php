<?php

function cptui_register_my_cpts() {

/**
 * Post Type: Cases.
 */

$labels = [
    "name" => __( "Cases", "myheadless" ),
    "singular_name" => __( "Case", "myheadless" ),
    "menu_name" => __( "My Cases", "myheadless" ),
    "all_items" => __( "All Cases", "myheadless" ),
    "add_new" => __( "Add new", "myheadless" ),
    "add_new_item" => __( "Add new Case", "myheadless" ),
    "edit_item" => __( "Edit Case", "myheadless" ),
    "new_item" => __( "New Case", "myheadless" ),
    "view_item" => __( "View Case", "myheadless" ),
    "view_items" => __( "View Cases", "myheadless" ),
    "search_items" => __( "Search Cases", "myheadless" ),
    "not_found" => __( "No Cases found", "myheadless" ),
    "not_found_in_trash" => __( "No Cases found in trash", "myheadless" ),
    "parent" => __( "Parent Case:", "myheadless" ),
    "featured_image" => __( "Featured image for this Case", "myheadless" ),
    "set_featured_image" => __( "Set featured image for this Case", "myheadless" ),
    "remove_featured_image" => __( "Remove featured image for this Case", "myheadless" ),
    "use_featured_image" => __( "Use as featured image for this Case", "myheadless" ),
    "archives" => __( "Case archives", "myheadless" ),
    "insert_into_item" => __( "Insert into Case", "myheadless" ),
    "uploaded_to_this_item" => __( "Upload to this Case", "myheadless" ),
    "filter_items_list" => __( "Filter Cases list", "myheadless" ),
    "items_list_navigation" => __( "Cases list navigation", "myheadless" ),
    "items_list" => __( "Cases list", "myheadless" ),
    "attributes" => __( "Cases attributes", "myheadless" ),
    "name_admin_bar" => __( "Case", "myheadless" ),
    "item_published" => __( "Case published", "myheadless" ),
    "item_published_privately" => __( "Case published privately.", "myheadless" ),
    "item_reverted_to_draft" => __( "Case reverted to draft.", "myheadless" ),
    "item_scheduled" => __( "Case scheduled", "myheadless" ),
    "item_updated" => __( "Case updated.", "myheadless" ),
    "parent_item_colon" => __( "Parent Case:", "myheadless" ),
];

$args = [
    "label" => __( "Cases", "myheadless" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => [ "slug" => "case", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-welcome-view-site",
    "supports" => [ "title", "custom-fields" ],
    "taxonomies" => [ "cases_tax" ],
    "show_in_graphql" => true,
    "graphql_single_name" => "GQLCase",
    "graphql_plural_name" => "GQLCases",
];

register_post_type( "case", $args );

/**
 * Post Type: Services.
 */

$labels = [
    "name" => __( "Services", "myheadless" ),
    "singular_name" => __( "Service", "myheadless" ),
    "menu_name" => __( "My Services", "myheadless" ),
    "all_items" => __( "All Services", "myheadless" ),
    "add_new" => __( "Add new", "myheadless" ),
    "add_new_item" => __( "Add new Service", "myheadless" ),
    "edit_item" => __( "Edit Service", "myheadless" ),
    "new_item" => __( "New Service", "myheadless" ),
    "view_item" => __( "View Service", "myheadless" ),
    "view_items" => __( "View Services", "myheadless" ),
    "search_items" => __( "Search Services", "myheadless" ),
    "not_found" => __( "No Services found", "myheadless" ),
    "not_found_in_trash" => __( "No Services found in trash", "myheadless" ),
    "parent" => __( "Parent Service:", "myheadless" ),
    "featured_image" => __( "Featured image for this Service", "myheadless" ),
    "set_featured_image" => __( "Set featured image for this Service", "myheadless" ),
    "remove_featured_image" => __( "Remove featured image for this Service", "myheadless" ),
    "use_featured_image" => __( "Use as featured image for this Service", "myheadless" ),
    "archives" => __( "Service archives", "myheadless" ),
    "insert_into_item" => __( "Insert into Service", "myheadless" ),
    "uploaded_to_this_item" => __( "Upload to this Service", "myheadless" ),
    "filter_items_list" => __( "Filter Services list", "myheadless" ),
    "items_list_navigation" => __( "Services list navigation", "myheadless" ),
    "items_list" => __( "Services list", "myheadless" ),
    "attributes" => __( "Services attributes", "myheadless" ),
    "name_admin_bar" => __( "Service", "myheadless" ),
    "item_published" => __( "Service published", "myheadless" ),
    "item_published_privately" => __( "Service published privately.", "myheadless" ),
    "item_reverted_to_draft" => __( "Service reverted to draft.", "myheadless" ),
    "item_scheduled" => __( "Service scheduled", "myheadless" ),
    "item_updated" => __( "Service updated.", "myheadless" ),
    "parent_item_colon" => __( "Parent Service:", "myheadless" ),
];

$args = [
    "label" => __( "Services", "myheadless" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => [ "slug" => "services", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-media-code",
    "supports" => [ "title", "thumbnail", "custom-fields" ],
    "show_in_graphql" => true,
    "graphql_single_name" => "GqlService",
    "graphql_plural_name" => "GqlServices",
];

register_post_type( "services", $args );

/**
 * Post Type: Careers.
 */

$labels = [
    "name" => __( "Careers", "myheadless" ),
    "singular_name" => __( "Career", "myheadless" ),
    "menu_name" => __( "My Careers", "myheadless" ),
    "all_items" => __( "All Careers", "myheadless" ),
    "add_new" => __( "Add new", "myheadless" ),
    "add_new_item" => __( "Add new Career", "myheadless" ),
    "edit_item" => __( "Edit Career", "myheadless" ),
    "new_item" => __( "New Career", "myheadless" ),
    "view_item" => __( "View Career", "myheadless" ),
    "view_items" => __( "View Careers", "myheadless" ),
    "search_items" => __( "Search Careers", "myheadless" ),
    "not_found" => __( "No Careers found", "myheadless" ),
    "not_found_in_trash" => __( "No Careers found in trash", "myheadless" ),
    "parent" => __( "Parent Career:", "myheadless" ),
    "featured_image" => __( "Featured image for this Career", "myheadless" ),
    "set_featured_image" => __( "Set featured image for this Career", "myheadless" ),
    "remove_featured_image" => __( "Remove featured image for this Career", "myheadless" ),
    "use_featured_image" => __( "Use as featured image for this Career", "myheadless" ),
    "archives" => __( "Career archives", "myheadless" ),
    "insert_into_item" => __( "Insert into Career", "myheadless" ),
    "uploaded_to_this_item" => __( "Upload to this Career", "myheadless" ),
    "filter_items_list" => __( "Filter Careers list", "myheadless" ),
    "items_list_navigation" => __( "Careers list navigation", "myheadless" ),
    "items_list" => __( "Careers list", "myheadless" ),
    "attributes" => __( "Careers attributes", "myheadless" ),
    "name_admin_bar" => __( "Career", "myheadless" ),
    "item_published" => __( "Career published", "myheadless" ),
    "item_published_privately" => __( "Career published privately.", "myheadless" ),
    "item_reverted_to_draft" => __( "Career reverted to draft.", "myheadless" ),
    "item_scheduled" => __( "Career scheduled", "myheadless" ),
    "item_updated" => __( "Career updated.", "myheadless" ),
    "parent_item_colon" => __( "Parent Career:", "myheadless" ),
];

$args = [
    "label" => __( "Careers", "myheadless" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => [ "slug" => "career", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-portfolio",
    "supports" => [ "title", "thumbnail", "custom-fields" ],
    "show_in_graphql" => true,
    "graphql_single_name" => "GQLCareer",
    "graphql_plural_name" => "GQLCareers",
];

register_post_type( "career", $args );

/**
 * Post Type: Employees.
 */

$labels = [
    "name" => __( "Employees", "myheadless" ),
    "singular_name" => __( "Employee", "myheadless" ),
    "menu_name" => __( "My Employees", "myheadless" ),
    "all_items" => __( "All Employees", "myheadless" ),
    "add_new" => __( "Add new", "myheadless" ),
    "add_new_item" => __( "Add new Employee", "myheadless" ),
    "edit_item" => __( "Edit Employee", "myheadless" ),
    "new_item" => __( "New Employee", "myheadless" ),
    "view_item" => __( "View Employee", "myheadless" ),
    "view_items" => __( "View Employees", "myheadless" ),
    "search_items" => __( "Search Employees", "myheadless" ),
    "not_found" => __( "No Employees found", "myheadless" ),
    "not_found_in_trash" => __( "No Employees found in trash", "myheadless" ),
    "parent" => __( "Parent Employee:", "myheadless" ),
    "featured_image" => __( "Featured image for this Employee", "myheadless" ),
    "set_featured_image" => __( "Set featured image for this Employee", "myheadless" ),
    "remove_featured_image" => __( "Remove featured image for this Employee", "myheadless" ),
    "use_featured_image" => __( "Use as featured image for this Employee", "myheadless" ),
    "archives" => __( "Employee archives", "myheadless" ),
    "insert_into_item" => __( "Insert into Employee", "myheadless" ),
    "uploaded_to_this_item" => __( "Upload to this Employee", "myheadless" ),
    "filter_items_list" => __( "Filter Employees list", "myheadless" ),
    "items_list_navigation" => __( "Employees list navigation", "myheadless" ),
    "items_list" => __( "Employees list", "myheadless" ),
    "attributes" => __( "Employees attributes", "myheadless" ),
    "name_admin_bar" => __( "Employee", "myheadless" ),
    "item_published" => __( "Employee published", "myheadless" ),
    "item_published_privately" => __( "Employee published privately.", "myheadless" ),
    "item_reverted_to_draft" => __( "Employee reverted to draft.", "myheadless" ),
    "item_scheduled" => __( "Employee scheduled", "myheadless" ),
    "item_updated" => __( "Employee updated.", "myheadless" ),
    "parent_item_colon" => __( "Parent Employee:", "myheadless" ),
];

$args = [
    "label" => __( "Employees", "myheadless" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => [ "slug" => "employee", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-admin-users",
    "supports" => [ "title", "custom-fields" ],
    "show_in_graphql" => true,
    "graphql_single_name" => "GQLEmployee",
    "graphql_plural_name" => "GQLEmployees",
];

register_post_type( "employee", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
