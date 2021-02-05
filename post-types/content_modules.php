<?php

/**
 * Registers the `content_modules` post type.
 */
function content_modules_init() {
	register_post_type( 'content_modules', array(
		'labels'                => array(
			'name'                  => __( 'Content modules', 'bc-homepage-functionality' ),
			'singular_name'         => __( 'Content Module', 'bc-homepage-functionality' ),
			'all_items'             => __( 'All Content modules', 'bc-homepage-functionality' ),
			'archives'              => __( 'Content Module Archives', 'bc-homepage-functionality' ),
			'attributes'            => __( 'Content Module Attributes', 'bc-homepage-functionality' ),
			'insert_into_item'      => __( 'Insert into content module', 'bc-homepage-functionality' ),
			'uploaded_to_this_item' => __( 'Uploaded to this content module', 'bc-homepage-functionality' ),
			'featured_image'        => _x( 'Featured Image', 'content_modules', 'bc-homepage-functionality' ),
			'set_featured_image'    => _x( 'Set featured image', 'content_modules', 'bc-homepage-functionality' ),
			'remove_featured_image' => _x( 'Remove featured image', 'content_modules', 'bc-homepage-functionality' ),
			'use_featured_image'    => _x( 'Use as featured image', 'content_modules', 'bc-homepage-functionality' ),
			'filter_items_list'     => __( 'Filter content module list', 'bc-homepage-functionality' ),
			'items_list_navigation' => __( 'Content module list navigation', 'bc-homepage-functionality' ),
			'items_list'            => __( 'Content module list', 'bc-homepage-functionality' ),
			'new_item'              => __( 'New Content Module', 'bc-homepage-functionality' ),
			'add_new'               => __( 'Add New', 'bc-homepage-functionality' ),
			'add_new_item'          => __( 'Add New Content module', 'bc-homepage-functionality' ),
			'edit_item'             => __( 'Edit Content module', 'bc-homepage-functionality' ),
			'view_item'             => __( 'View Content modules', 'bc-homepage-functionality' ),
			'view_items'            => __( 'View Content modules', 'bc-homepage-functionality' ),
			'search_items'          => __( 'Search content modules', 'bc-homepage-functionality' ),
			'not_found'             => __( 'No content modules found', 'bc-homepage-functionality' ),
			'not_found_in_trash'    => __( 'No content modules found in trash', 'bc-homepage-functionality' ),
			'parent_item_colon'     => __( 'Parent Content Module:', 'bc-homepage-functionality' ),
			'menu_name'             => __( 'Content Modules', 'bc-homepage-functionality' ),
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
		'menu_icon'             => 'dashicons-grid-view',
		'show_in_rest'          => true,
		'rest_base'             => 'content_modules',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'content_modules_init' );

/**
 * Sets the post updated messages for the `content_modules` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `content_modules` post type.
 */
function content_modules_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['content_modules'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Content module updated. <a target="_blank" href="%s">View content modules</a>', 'bc-homepage-functionality' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'bc-homepage-functionality' ),
		3  => __( 'Custom field deleted.', 'bc-homepage-functionality' ),
		4  => __( 'Content module updated.', 'bc-homepage-functionality' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Content modules restored to revision from %s', 'bc-homepage-functionality' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Content modules published. <a href="%s">View content modules</a>', 'bc-homepage-functionality' ), esc_url( $permalink ) ),
		7  => __( 'Content modules saved.', 'bc-homepage-functionality' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Content modules submitted. <a target="_blank" href="%s">Preview content modules</a>', 'bc-homepage-functionality' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Content modules scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview content modules</a>', 'bc-homepage-functionality' ),
		date_i18n( __( 'M j, Y @ G:i', 'bc-homepage-functionality' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Content modules draft updated. <a target="_blank" href="%s">Preview content modules</a>', 'bc-homepage-functionality' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'content_modules_updated_messages' );
