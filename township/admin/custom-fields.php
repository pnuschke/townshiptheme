<?php
/**
 * Township custom fields
 *
 *
 */

/**
 * Sets up theme defaults and registers the various WordPress features that
 * Twenty Thirteen supports.
 *
 *
 * @return void
 */

$text_domain = "township_english";
/**
 * Adds a box to the main column on the Post and Page edit screens.
 */



function township_add_meta_box() {
	//id, visible name, callback, post type, context, priority, callback args
	add_meta_box(
		'township_home_mainimage',
		__( 'Main Image', $text_domain ),
		'township_home_mainimage_meta_box_callback',
		'post'
	);
}

function setup_home_meta_boxes() {
	add_action( 'add_meta_boxes', 'township_add_meta_box' );	
}

add_action( 'township_home', 'setup_home_meta_boxes');


/**
 * Prints the box content.
 * 
 * @param WP_Post $post The object for the current post/page.
 */
function township_home_mainimage_meta_box_callback( $post ) {

	// Add an nonce field so we can check for it later.
	wp_nonce_field( 'township_meta_box', 'township_meta_box_nonce' );

	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$value = get_post_meta( $post->ID, '_my_meta_value_key', true );

	echo '<label for="township_new_field">';
	_e( 'Description for this field', 'township_textdomain' );
	echo '</label> ';
	echo '<input type="text" id="township_new_field" name="township_new_field" value="' . esc_attr( $value ) . '" size="25" />';
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function township_save_meta_box_data( $post_id ) {

	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['township_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['township_meta_box_nonce'], 'township_meta_box' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}

	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* OK, it's safe for us to save the data now. */
	
	// Make sure that it is set.
	if ( ! isset( $_POST['township_new_field'] ) ) {
		return;
	}

	// Sanitize user input.
	$my_data = sanitize_text_field( $_POST['township_new_field'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, '_my_meta_value_key', $my_data );
}
add_action( 'save_post', 'township_save_meta_box_data' );
