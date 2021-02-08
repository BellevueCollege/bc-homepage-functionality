<?php

/**
 * Registers the `around_campus` post type.
 */
function around_campus_init() {
	register_post_type( 'around_campus', array(
		'labels'                => array(
			'name'                  => __( 'Around Campus', 'bc-homepage-functionality' ),
			'singular_name'         => __( 'Around Campus feature', 'bc-homepage-functionality' ),
			'all_items'             => __( 'All Around Campus features', 'bc-homepage-functionality' ),
			'archives'              => __( 'Around Campus Archives', 'bc-homepage-functionality' ),
			'attributes'            => __( 'Around Campus Attributes', 'bc-homepage-functionality' ),
			'insert_into_item'      => __( 'Insert into features', 'bc-homepage-functionality' ),
			'uploaded_to_this_item' => __( 'Uploaded to this feature', 'bc-homepage-functionality' ),
			'featured_image'        => _x( 'Featured Image', 'around_campus', 'bc-homepage-functionality' ),
			'set_featured_image'    => _x( 'Set featured image', 'around_campus', 'bc-homepage-functionality' ),
			'remove_featured_image' => _x( 'Remove featured image', 'around_campus', 'bc-homepage-functionality' ),
			'use_featured_image'    => _x( 'Use as featured image', 'around_campus', 'bc-homepage-functionality' ),
			'filter_items_list'     => __( 'Filter features list', 'bc-homepage-functionality' ),
			'items_list_navigation' => __( 'Around Campus list navigation', 'bc-homepage-functionality' ),
			'items_list'            => __( 'Around Campus features list', 'bc-homepage-functionality' ),
			'new_item'              => __( 'New Around Campus feature', 'bc-homepage-functionality' ),
			'add_new'               => __( 'Add New', 'bc-homepage-functionality' ),
			'add_new_item'          => __( 'Add New Around Campus feature', 'bc-homepage-functionality' ),
			'edit_item'             => __( 'Edit Around Campus', 'bc-homepage-functionality' ),
			'view_item'             => __( 'View Around Campus', 'bc-homepage-functionality' ),
			'view_items'            => __( 'View Around Campus features', 'bc-homepage-functionality' ),
			'search_items'          => __( 'Search features', 'bc-homepage-functionality' ),
			'not_found'             => __( 'No Around Campus features found', 'bc-homepage-functionality' ),
			'not_found_in_trash'    => __( 'No Around Campus features found in trash', 'bc-homepage-functionality' ),
			'parent_item_colon'     => __( 'Parent Around Campus feature:', 'bc-homepage-functionality' ),
			'menu_name'             => __( 'Around Campus', 'bc-homepage-functionality' ),
		),
		'public'                => true,
		'publicly_queryable'    => false,
		'hierarchical'          => true,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'page-attributes'),
		'has_archive'           => false,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_position'         => null,
		'menu_icon'             => 'dashicons-layout',
		'show_in_rest'          => true,
		'rest_base'             => 'around_campus',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'around_campus_init' );

/**
 * Sets the post updated messages for the `around_campus` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `around_campus` post type.
 */
function around_campus_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['around_campus'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Around campus updated. <a target="_blank" href="%s">View around campus</a>', 'bc-homepage-functionality' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'bc-homepage-functionality' ),
		3  => __( 'Custom field deleted.', 'bc-homepage-functionality' ),
		4  => __( 'Around campus updated.', 'bc-homepage-functionality' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Around campus restored to revision from %s', 'bc-homepage-functionality' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Around campus published. <a href="%s">View around campus</a>', 'bc-homepage-functionality' ), esc_url( $permalink ) ),
		7  => __( 'Around campus saved.', 'bc-homepage-functionality' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Around campus submitted. <a target="_blank" href="%s">Preview around campus</a>', 'bc-homepage-functionality' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Around campus scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview around campus</a>', 'bc-homepage-functionality' ),
		date_i18n( __( 'M j, Y @ G:i', 'bc-homepage-functionality' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Around campus draft updated. <a target="_blank" href="%s">Preview around campus</a>', 'bc-homepage-functionality' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'around_campus_updated_messages' );
