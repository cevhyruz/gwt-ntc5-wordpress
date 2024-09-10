<?php

add_action( 'wp_enqueue_scripts', 'gwt_ntc_mock1_enqueue_styles' );
function gwt_ntc_mock1_enqueue_styles() {
	wp_enqueue_style( 
		'gwt-ntc-mock1-style', 
		get_stylesheet_uri( 'style.css' )
	);
}

