<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */
add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );

function cmb_sample_metaboxes( array $meta_boxes ) {

	$prefix = '_cmb_';

	$meta_boxes['post_metabox'] = array(
		'id'         => 'post_metabox',
		'title'      => __( 'Post Meta', 'cmb' ),
		'pages'      => array( 'post' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
  		array(
				'name'    => __( 'Short description', 'cmb' ),
				'desc'    => __( '...', 'cmb' ),
				'id'      => $prefix . 'short_desc',
				'type'    => 'wysiwyg',
				'options' => array( 'textarea_rows' => 5, ),
			),
			array(
				'name' => __( 'Author', 'cmb' ),
				'desc' => __( '', 'cmb' ),
				'id'   => $prefix . 'author',
				'type' => 'text',
			),
			array(
				'name' => __( 'Author Twitter', 'cmb' ),
				'desc' => __( 'Optional. No @', 'cmb' ),
				'id'   => $prefix . 'author_twitter',
				'type' => 'text',
			),
			array(
				'name' => __( 'Related Novara post 1', 'cmb' ),
				'desc' => __( 'permalink to related novaramedia.com article', 'cmb' ),
				'id'   => $prefix . 'novara_related_1',
				'type' => 'text_url',
			),
			array(
				'name' => __( 'Related Novara post 2', 'cmb' ),
				'desc' => __( 'permalink to related novaramedia.com article', 'cmb' ),
				'id'   => $prefix . 'novara_related_2',
				'type' => 'text_url',
			),
			array(
				'name' => __( 'Related Novara post 3', 'cmb' ),
				'desc' => __( 'permalink to related novaramedia.com article', 'cmb' ),
				'id'   => $prefix . 'novara_related_3',
				'type' => 'text_url',
			)
		),
	);

	return $meta_boxes;
}
?>