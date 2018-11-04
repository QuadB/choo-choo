<?php

require('php/Theme.php');

/**
 * Theme setup function
 */
if (!function_exists('wp_uikit_starter_setup')) {
    function wp_uikit_starter_setup()
    {
        global $theme;
        $theme = new Theme();
    }

    add_action('after_setup_theme', 'wp_uikit_starter_setup');
}

/**
 * Get the bootstrap!
 */
if ( file_exists( __DIR__ . '/cmb2/init.php' ) ) {
  require_once __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once __DIR__ . '/CMB2/init.php';
}


add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'sg_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'show_on'      => array( 'key' => 'page-template', 'value' => 'sparkglobal frontpage.php' ),
		'id'            => 'sg_metabox',
		'title'         => __( 'Page Text', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		//'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );


$cmb->add_field( array(
		'name' => esc_html__( 'Slider Image 1', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image1',
		'type' => 'file',
	) );
$cmb->add_field( array(
		'name' => esc_html__( 'Slider Image 2', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image2',
		'type' => 'file',
	) );
$cmb->add_field( array(
		'name' => esc_html__( 'Slider Image 3', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image3',
		'type' => 'file',
	) );

$cmb->add_field( array(
		'name' => esc_html__( 'Slider Image 4', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image4',
		'type' => 'file',
	) );
$cmb->add_field( array(
		'name' => esc_html__( 'Slider Image 5', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image5',
		'type' => 'file',
	) );
$cmb->add_field( array(
		'name' => esc_html__( 'Slider Image 6', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image6',
		'type' => 'file',
	) );


	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Info Header 1', 'cmb2' ),
		'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => $prefix . 'ih1',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );

		// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Info 1', 'cmb2' ),
		'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => $prefix . 'i1',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );

	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Info Header 2', 'cmb2' ),
		'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => $prefix . 'ih2',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );

		// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Info 2', 'cmb2' ),
		'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => $prefix . 'i2',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );

	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Info Header 3', 'cmb2' ),
		'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => $prefix . 'ih3',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		//'repeatable'      => true,
	) );

	


	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Info 3', 'cmb2' ),
		'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => $prefix . 'i3',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );

	// Multiple File Uploader
/**$cmb->add_field( array(
		'name'         => esc_html__( 'Product Gallery', 'cmb2' ),
		'desc'         => esc_html__( 'Upload or add multiple images/attachments.', 'cmb2' ),
		'id'           => $prefix . 'file_list',
		'type'         => 'file_list',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );
**/

// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'About Us Header', 'cmb2' ),
		'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => $prefix . 'aboutusheader',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		//'repeatable'      => true,
	) );

$cmb->add_field( array(
		'name'    => esc_html__( 'About Us Text', 'cmb2' ),
		'desc'    => esc_html__( '(optional)', 'cmb2' ),
		'id'      => $prefix . 'aboutustext',
		'type'    => 'wysiwyg',
		'options' => array( 'textarea_rows' => 10, ),
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'About Us Image', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'aboutusimage',
		'type' => 'file',
	) );

//Brand Image Slider
	$cmb->add_field( array(
		'name' => esc_html__( 'Product Image 1', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'bi1',
		'type' => 'file',
	) );
	$cmb->add_field( array(
		'name' => esc_html__( 'Product Image 2', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'bi2',
		'type' => 'file',
	) );
	$cmb->add_field( array(
		'name' => esc_html__( 'Product Image 3', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'bi3',
		'type' => 'file',
	) );
	$cmb->add_field( array(
		'name' => esc_html__( 'Image 4', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'bi4',
		'type' => 'file',
	) );


	function sg_get_wysiwyg_output( $meta_key, $post_id = 0 ) {
	global $wp_embed;

	$post_id = $post_id ? $post_id : get_the_id();

	$content = get_post_meta( $post_id, $meta_key, 1 );
	$content = $wp_embed->autoembed( $content );
	$content = $wp_embed->run_shortcode( $content );
	$content = wpautop( $content );
	$content = do_shortcode( $content );

	return $content;
}

	// Add other metaboxes as needed


	$cmb = new_cmb2_box( array(
		'show_on'      => array( 'key' => 'page-template', 'value' => 'product page.php' ),
		'id'            => 'sgd_metabox',
		'title'         => __( 'Page Text', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		//'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

//Product Image Slider
	$cmb->add_field( array(
		'name' => esc_html__( 'Product 1', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'bi1',
		'type' => 'file',
	) );
		$cmb->add_field( array(
		'name' => esc_html__( 'Product 2', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'bi2',
		'type' => 'file',
	) );
			$cmb->add_field( array(
		'name' => esc_html__( 'Product 3', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'bi3',
		'type' => 'file',
	) );
			$cmb->add_field( array(
		'name' => esc_html__( 'Product 4', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'bi4',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Product 5', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'bi5',
		'type' => 'file',
	) );

$cmb->add_field( array(
		'name' => esc_html__( 'Product 6', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'bi6',
		'type' => 'file',
	) );

$cmb->add_field( array(
		'name' => esc_html__( 'Product 7', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'bi7',
		'type' => 'file',
	) );

$cmb->add_field( array(
		'name' => esc_html__( 'Product 8', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'bi8',
		'type' => 'file',
	) );


	}