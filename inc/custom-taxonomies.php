<?php

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Case Categories.
	 */

	$labels = [
		"name" => __( "Case Categories", "myheadless" ),
		"singular_name" => __( "Case Category", "myheadless" ),
		"menu_name" => __( "Case Categories", "myheadless" ),
		"all_items" => __( "All Case Categories", "myheadless" ),
		"edit_item" => __( "Edit Case Category", "myheadless" ),
		"view_item" => __( "View Case Category", "myheadless" ),
		"update_item" => __( "Update Case Category name", "myheadless" ),
		"add_new_item" => __( "Add new Case Category", "myheadless" ),
		"new_item_name" => __( "New Case Category name", "myheadless" ),
		"parent_item" => __( "Parent Case Category", "myheadless" ),
		"parent_item_colon" => __( "Parent Case Category:", "myheadless" ),
		"search_items" => __( "Search Case Categories", "myheadless" ),
		"popular_items" => __( "Popular Case Categories", "myheadless" ),
		"separate_items_with_commas" => __( "Separate Case Categories with commas", "myheadless" ),
		"add_or_remove_items" => __( "Add or remove Case Categories", "myheadless" ),
		"choose_from_most_used" => __( "Choose from the most used Case Categories", "myheadless" ),
		"not_found" => __( "No Case Categories found", "myheadless" ),
		"no_terms" => __( "No Case Categories", "myheadless" ),
		"items_list_navigation" => __( "Case Categories list navigation", "myheadless" ),
		"items_list" => __( "Case Categories list", "myheadless" ),
		"back_to_items" => __( "Back to Case Categories", "myheadless" ),
	];

	
	$args = [
		"label" => __( "Case Categories", "myheadless" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'cases_tax', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "cases_tax",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => true,
		"graphql_single_name" => "GQLCaseCategory",
		"graphql_plural_name" => "GQLCaseCategories",
	];
	register_taxonomy( "cases_tax", [ "case" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
