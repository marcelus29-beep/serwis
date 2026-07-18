<?php
/**
 * 3DPrintHub
 * Custom functionality for ListingHive.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Load custom CSS.
 */
function tdph_enqueue_assets() {

	wp_enqueue_style(
		'tdph-variables',
		get_template_directory_uri() . '/assets/css/variables.css',
		[],
		filemtime( get_template_directory() . '/assets/css/variables.css' )
	);

	wp_enqueue_style(
		'tdph-header',
		get_template_directory_uri() . '/assets/css/header.css',
		[ 'tdph-variables' ],
		filemtime( get_template_directory() . '/assets/css/header.css' )
	);

	wp_enqueue_style(
		'tdph-hero',
		get_template_directory_uri() . '/assets/css/hero.css',
		[ 'tdph-header' ],
		filemtime( get_template_directory() . '/assets/css/hero.css' )
	);

	wp_enqueue_style(
		'tdph-categories',
		get_template_directory_uri() . '/assets/css/categories.css',
		[ 'tdph-hero' ],
		filemtime( get_template_directory() . '/assets/css/categories.css' )
	);

	wp_enqueue_style(
		'tdph-cards',
		get_template_directory_uri() . '/assets/css/cards.css',
		[ 'tdph-categories' ],
		filemtime( get_template_directory() . '/assets/css/cards.css' )
	);

	wp_enqueue_style(
		'tdph-listings',
		get_template_directory_uri() . '/assets/css/listings.css',
		[ 'tdph-cards' ],
		filemtime( get_template_directory() . '/assets/css/listings.css' )
	);

	wp_enqueue_style(
		'tdph-single',
		get_template_directory_uri() . '/assets/css/listing-single.css',
		[ 'tdph-listings' ],
		filemtime( get_template_directory() . '/assets/css/listing-single.css' )
	);

	wp_enqueue_style(
		'tdph-forms',
		get_template_directory_uri() . '/assets/css/forms.css',
		[ 'tdph-single' ],
		filemtime( get_template_directory() . '/assets/css/forms.css' )
	);

	wp_enqueue_style(
		'tdph-account',
		get_template_directory_uri() . '/assets/css/account.css',
		[ 'tdph-forms' ],
		filemtime( get_template_directory() . '/assets/css/account.css' )
	);

	wp_enqueue_style(
		'tdph-responsive',
		get_template_directory_uri() . '/assets/css/responsive.css',
		[ 'tdph-account' ],
		filemtime( get_template_directory() . '/assets/css/responsive.css' )
	);

}
add_action( 'wp_enqueue_scripts', 'tdph_enqueue_assets', 100 );