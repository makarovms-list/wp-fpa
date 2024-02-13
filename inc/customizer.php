<?php
/**
 * fpalaw Theme Customizer
 *
 * @package fpalaw
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function fpalaw_customize_register( $wp_customize ) {
	$wp_customize->add_section('otzivy_section' , array(
	  'title'    => 'Отзывы',
	  'priority' => 99,
	));
	$wp_customize->add_setting('otzivy_header', array(
	  'capability' => 'edit_theme_options',
	  'default' => '',
	  'sanitize_callback' => 'sanitize_text_field',
	));
    $wp_customize->add_control('otzivy_header', array(
	  'type' => 'textarea',
	  'section' => 'otzivy_section',
	  'label' => 'H1',
	));
  
  	$wp_customize->add_setting('otzivy_text', array(
	  'capability' => 'edit_theme_options',
	  'default' => '',
	  'sanitize_callback' => 'sanitize_text_field',
	));
    $wp_customize->add_control('otzivy_text', array(
	  'type' => 'textarea',
	  'section' => 'otzivy_section',
	  'label' => 'Текст',
	));
    
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'fpalaw_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'fpalaw_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'fpalaw_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function fpalaw_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function fpalaw_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function fpalaw_customize_preview_js() {
	wp_enqueue_script( 'fpalaw-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '0.0.0.0', true );
}
add_action( 'customize_preview_init', 'fpalaw_customize_preview_js' );
