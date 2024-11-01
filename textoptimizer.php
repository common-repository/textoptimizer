<?php
/*
*	Plugin Name: TextOptimizer
*	Plugin URI: http://textoptimizer.com
*	Description: Optimize your text to rank higher in search engine results.
*	Version: 4.4.1
*	Author: Webinfo LTD
*	Author URI: http://textoptimizer.com
*	Text Domain: textoptimizer
*/

/**
*	@package	Textoptimizer WordPress Plugin
*	@author		Webinfo LTD
*/

// Textoptimizer Plugin Folder Url.
if ( ! defined( 'TEXTOPTIMIZER_PLUGIN_URL' ) ) :
	define( 'TEXTOPTIMIZER_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
endif;

Class Textoptimizer {

	/** Textoptimizer Constructor
	*	@no-argument
	*	@no-return
	*	set all default action and hook calling
	**/
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array(&$this, 'TextoptimizerAdminEnqueue'));
		add_action( 'add_meta_boxes', array(&$this, 'TextoptimizerRegisterMetaBox'));
		add_action('wp_ajax_textoptimizer_api_call', array(&$this, 'TextoptimizerAPICall'));
		add_action('wp_ajax_nopriv_textoptimizer_api_call', array(&$this, 'TextoptimizerAPICall'));
	}

	/** Textoptimizer Register Metabox Add In Post 
	*	@no-argument
	*	@no-return
	**/
	public function TextoptimizerRegisterMetaBox() {
		add_meta_box( 'textoptimizer-metabox', __( 'TextOptimizer', 'textoptimizer' ), array(&$this, 'TextoptimizerFields'), array('post', 'page'), 'side', 'high');
	}

	/** Textoptimizer Metabox Fields
    *   @no-argument
    *   @no-return
    **/
	public function TextoptimizerFields() {
		include_once('textoptimizer-meta.php');
	}

	/** Textoptimizer Admin Enqueue Files
	*	@no-argument
	*	@no-return
	**/
	public function TextoptimizerAdminEnqueue() {
		wp_enqueue_script( 'nice-select-script', plugins_url('/js/jquery.nice-select.min.js', __FILE__), null, false, true );
		wp_enqueue_script( 'add-to-cart-script', plugins_url('/js/add-to-cart.js', __FILE__), null, false, true );
		wp_enqueue_script( 'locations-script', plugins_url('/js/locations.js', __FILE__), null, false, true );
		wp_enqueue_script( 'textoptimizer-plugin-script', plugins_url('/js/textoptimizer.js', __FILE__), null, false, true );
		wp_add_inline_script( 
			'textoptimizer-plugin-script',
			'
				const textoptimizer_ajax_url 	= "' . admin_url( 'admin-ajax.php' ) . '";
				const image_path 				= "' . esc_url(TEXTOPTIMIZER_PLUGIN_URL) . 'i_extension";
			',
			'before'
		);

		wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
		wp_enqueue_style( 'fontawesome-style', plugins_url('/css/fontawesome/css/all.min.css', __FILE__) );
		wp_enqueue_style( 'animate-style', plugins_url('/css/animate.css', __FILE__) );
		wp_enqueue_style( 'bootstrap-style', plugins_url('/css/bootstrap.min.css', __FILE__) );
		wp_enqueue_style( 'textoptimizer-style', 'https://textoptimizer.com/css/textoptimizer.css' );
		wp_enqueue_style( 'textoptimizer-plugin-style', plugins_url('/css/textoptimizer_plugin.css', __FILE__) );
	}

	/** 
		Textoptimizer API Call
	**/
	public function TextoptimizerAPICall() {
		$url = esc_url_raw($_POST["url"]);
		$method = sanitize_text_field($_POST["method"]);
		$curlFields = json_decode(stripslashes($_POST["curlFields"]), true);
		$curlFields = array_map( 'wp_filter_post_kses', $curlFields );

		if($method == 'GET') {
			$url = $url.'?'.http_build_query($curlFields);
			$args = array(
			    'headers' => array(
			        'Accept' => isset($_POST["accept"]) ? sanitize_text_field($_POST["accept"]) : 'application/json'
			    )
			);
			$response = wp_remote_get($url, $args);
		} 
		else {
			$args = array(
			    'body' => $curlFields
			);
			$response = wp_remote_post($url, $args);
		}

		echo $response['body'];
		exit;
	}
	
}
/* Create Textoptimizer Class Object */
$textoptimizer = new Textoptimizer();
?>