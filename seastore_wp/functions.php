<?php 

    function seastore_wp_styles() {
		wp_enqueue_style( 'foundation_css', get_stylesheet_directory_uri() . '/assets/css/foundation.css'); 
        wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css'); 
        wp_enqueue_style( 'bootstrap_min_css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css'); 
        wp_enqueue_style( 'style_css', get_stylesheet_uri() ); 
        wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() . '/assets/css/main.css'); 



        wp_enqueue_script( 'browser_js', get_template_directory_uri() . '/assets/js/browser.min.js', array('jquery'), '', true );
        wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/assets/js/foundation.js', array(), '', true );

    }



    add_action('wp_enqueue_scripts', 'seastore_wp_styles');

    add_theme_support('title-tag');

	add_action( 'after_setup_theme', 'woocommerce_support' );
	function woocommerce_support() {
	add_theme_support( 'woocommerce' );
	}

	define('WOOCOMMERCE_USE_CSS', false);


