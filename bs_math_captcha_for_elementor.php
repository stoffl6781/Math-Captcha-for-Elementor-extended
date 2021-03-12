<?php
/**
 * Plugin Name: Math Captcha for Elementor Forms
 * Description: Simple match captcha for Elementor Page Builder Forms
 * Plugin URI: https://albanotoska.com/bsbanners/bs-math-captcha-for-elementor-forms/
 * Version: 0.3
 * Author: Albano Toska
 * Author URI: https://albanotoska.com/
 * License:     GPL2
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 */
if ( ! defined( 'ABSPATH' ) ) exit;
/* ENQUEUE NEEDED STYLES AND JS */
function bs_match_captcha_for_elementor_forms_scripts_style() {
			wp_register_script( 'mainjs', plugin_dir_url( __FILE__ ) . '/assets/js/main.js', array('jquery'), false, true );
            wp_enqueue_script( 'mainjs' );
            wp_register_script( 'ebrecaptcha', plugin_dir_url( __FILE__ ) . '/assets/js/jquery.ebcaptcha.js', array('jquery'), false, true );
            wp_enqueue_script( 'ebrecaptcha' );
            wp_register_script( 'arrivejs', plugin_dir_url( __FILE__ ) . '/assets/js/arrive.min.js', array('jquery'), false, true );
            wp_enqueue_script( 'arrivejs' );
	wp_register_style( 'maincss', plugin_dir_url( __FILE__ ) . '/assets/css/main.css');
            wp_enqueue_style( 'maincss' );
}
add_action( 'wp_enqueue_scripts', 'bs_match_captcha_for_elementor_forms_scripts_style' );