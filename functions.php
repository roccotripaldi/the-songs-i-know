<?php

function songs_set_home_query( $query ) {
	if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
		$query->set( 'posts_per_page', -1 );
		$query->set( 'orderby', 'title' );
		$query->set( 'order', 'ASC' );
	}
}

add_action( 'pre_get_posts', 'songs_set_home_query' );

function songs_enqueue_assets() {
	if ( is_home() ) {
		wp_enqueue_script(
			'songs_data_table_scripts',
			'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
			array( 'jquery' )
		);
		wp_enqueue_style(
			'songs_data_table_styles',
			'https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css'
		);
	}
	wp_enqueue_style(
		'songs',
		get_stylesheet_uri()
	);
}

add_action( 'wp_enqueue_scripts', 'songs_enqueue_assets' );

function songs_request_success_message() {
	return (
		"<p class='request-success'><b>Transmission Received!</b><br /><a href='/learn'>Request an other song?</a></p>"
	);
}


add_filter( 'grunion_contact_form_success_message', 'songs_request_success_message' );

