<?php

/**
 * Registers the `feature_type` taxonomy,
 * for use with 'around_campus'.
 */
function feature_type_init() {
	register_taxonomy( 'feature_type', array( 'around_campus' ), array(
		'hierarchical'      => true,
		'public'            => false,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts',
		),
		'labels'            => array(
			'name'                       => __( 'Feature Types', 'bc-homepage-functionality' ),
			'singular_name'              => _x( 'Feature Type', 'taxonomy general name', 'bc-homepage-functionality' ),
			'search_items'               => __( 'Search Feature types', 'bc-homepage-functionality' ),
			'popular_items'              => __( 'Popular Feature Types', 'bc-homepage-functionality' ),
			'all_items'                  => __( 'All Feature Types', 'bc-homepage-functionality' ),
			'parent_item'                => __( 'Parent Feature Type', 'bc-homepage-functionality' ),
			'parent_item_colon'          => __( 'Parent Feature Type:', 'bc-homepage-functionality' ),
			'edit_item'                  => __( 'Edit Feature Type', 'bc-homepage-functionality' ),
			'update_item'                => __( 'Update Feature Type', 'bc-homepage-functionality' ),
			'view_item'                  => __( 'View Feature Type', 'bc-homepage-functionality' ),
			'add_new_item'               => __( 'Add New Feature Type', 'bc-homepage-functionality' ),
			'new_item_name'              => __( 'New Feature Type', 'bc-homepage-functionality' ),
			'separate_items_with_commas' => __( 'Separate feature types with commas', 'bc-homepage-functionality' ),
			'add_or_remove_items'        => __( 'Add or remove feature types', 'bc-homepage-functionality' ),
			'choose_from_most_used'      => __( 'Choose from the most used feature types', 'bc-homepage-functionality' ),
			'not_found'                  => __( 'No feature types found.', 'bc-homepage-functionality' ),
			'no_terms'                   => __( 'No feature types', 'bc-homepage-functionality' ),
			'menu_name'                  => __( 'Feature Type', 'bc-homepage-functionality' ),
			'items_list_navigation'      => __( 'Feature types list navigation', 'bc-homepage-functionality' ),
			'items_list'                 => __( 'Feature types list', 'bc-homepage-functionality' ),
			'most_used'                  => _x( 'Most Used', 'feature_type', 'bc-homepage-functionality' ),
			'back_to_items'              => __( '&larr; Back to Feature types', 'bc-homepage-functionality' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'feature_type',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'feature_type_init' );

/**
 * Sets the post updated messages for the `feature_type` taxonomy.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `feature_type` taxonomy.
 */
function feature_type_updated_messages( $messages ) {

	$messages['feature_type'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => __( 'Feature type added.', 'bc-homepage-functionality' ),
		2 => __( 'Feature type deleted.', 'bc-homepage-functionality' ),
		3 => __( 'Feature type updated.', 'bc-homepage-functionality' ),
		4 => __( 'Feature type not added.', 'bc-homepage-functionality' ),
		5 => __( 'Feature type not updated.', 'bc-homepage-functionality' ),
		6 => __( 'Feature types deleted.', 'bc-homepage-functionality' ),
	);

	return $messages;
}
add_filter( 'term_updated_messages', 'feature_type_updated_messages' );
