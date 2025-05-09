<?php
/**
 * Footer panel.
 */

// Add section immediately to keep sort order.
Flatsome_Option::add_section( 'footer', array(
	'title' => __( 'Footer', 'flatsome-admin' ),
) );

function flatsome_customizer_footer_options() {
	Flatsome_Option::add_field( '', array(
		'type'     => 'custom',
		'settings' => 'custom_title_custom_footer',
		'label'    => '',
		'section'  => 'footer',
		'default'  => '<div class="options-title-divider"  style="margin-bottom:15px">Custom Footer</div>',
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'        => 'select',
		'settings'    => 'footer_block',
		'label'       => __( 'Custom Footer Block', 'flatsome-admin' ),
		'section'     => 'footer',
		'description' => __( 'You can replace the Footer with a Custom Block that you can edit in the Page Builder.', 'flatsome-admin' ),
		'default'     => false,
		'choices'     => flatsome_customizer_blocks(),
	) );

	$hide_on_custom_footer_block = array(
		array( 'setting' => 'footer_block', 'operator' => '==', 'value' => false ),
	);

	Flatsome_Option::add_field( '', array(
		'type'            => 'custom',
		'settings'        => 'custom_html_footer_widgets',
		'label'           => '',
		'section'         => 'footer',
		'active_callback' => $hide_on_custom_footer_block,
		'default'         => '<div class="options-title-divider" style="margin-bottom:15px">Widgets</div><p>Click the button to go to Footer Widgets</p><div><button style="margin-bottom:15px" class="button button-primary" data-to-panel="widgets">Edit Footer Widgets</button></div>',
	) );

	Flatsome_Option::add_field( '', array(
		'type'            => 'custom',
		'settings'        => 'custom_title_footer_1',
		'label'           => '',
		'active_callback' => $hide_on_custom_footer_block,
		'section'         => 'footer',
		'default'         => '<div class="options-title-divider">Footer 1</div>',
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'            => 'checkbox',
		'settings'        => 'footer_1',
		'active_callback' => $hide_on_custom_footer_block,
		'transport'       => flatsome_customizer_transport(),
		'label'           => __( 'Enable Footer 1', 'flatsome-admin' ),
		'section'         => 'footer',
		'default'         => 1,
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'            => 'radio-buttonset',
		'settings'        => 'footer_1_columns',
		'label'           => __( 'Columns', 'flatsome-admin' ),
		'section'         => 'footer',
		'active_callback' => $hide_on_custom_footer_block,
		'default'         => '4',
		'transport'       => flatsome_customizer_transport(),
		'choices'         => array(
			'6' => __( '6', 'flatsome-admin' ),
			'4' => __( '4', 'flatsome-admin' ),
			'3' => __( '3', 'flatsome-admin' ),
			'2' => __( '2', 'flatsome-admin' ),
			'1' => __( '1', 'flatsome-admin' ),
		),
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'            => 'radio-image',
		'settings'        => 'footer_1_color',
		'label'           => __( 'Text color', 'flatsome-admin' ),
		'active_callback' => $hide_on_custom_footer_block,
		'section'         => 'footer',
		'default'         => 'light',
		'transport'       => flatsome_customizer_transport(),
		'choices'         => array(
			'dark'  => flatsome_customizer_images_uri() . '/text-light.svg',
			'light' => flatsome_customizer_images_uri() . '/text-dark.svg',
		),
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'            => 'color-alpha',
		'alpha'           => true,
		'settings'        => 'footer_1_bg_color',
		'label'           => __( 'Background Color', 'flatsome-admin' ),
		'section'         => 'footer',
		'default'         => '#fff',
		'transport'       => flatsome_customizer_transport(),
		'active_callback' => $hide_on_custom_footer_block,
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'            => 'image',
		'settings'        => 'footer_1_bg_image',
		'label'           => __( 'Background Image', 'flatsome-admin' ),
		'section'         => 'footer',
		'default'         => '',
		'transport'       => flatsome_customizer_transport(),
		'active_callback' => $hide_on_custom_footer_block,
	) );

	Flatsome_Option::add_field( '', array(
		'type'            => 'custom',
		'settings'        => 'custom_title_footer_2',
		'label'           => '',
		'section'         => 'footer',
		'default'         => '<div class="options-title-divider">Footer 2</div>',
		'active_callback' => $hide_on_custom_footer_block,
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'            => 'checkbox',
		'settings'        => 'footer_2',
		'transport'       => flatsome_customizer_transport(),
		'active_callback' => $hide_on_custom_footer_block,
		'label'           => __( 'Enable Footer 2', 'flatsome-admin' ),
		'section'         => 'footer',
		'default'         => 1,
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'            => 'radio-buttonset',
		'settings'        => 'footer_2_columns',
		'label'           => __( 'Columns', 'flatsome-admin' ),
		'section'         => 'footer',
		'default'         => '4',
		'transport'       => flatsome_customizer_transport(),
		'choices'         => array(
			'6' => __( '6', 'flatsome-admin' ),
			'4' => __( '4', 'flatsome-admin' ),
			'3' => __( '3', 'flatsome-admin' ),
			'2' => __( '2', 'flatsome-admin' ),
			'1' => __( '1', 'flatsome-admin' ),
		),
		'active_callback' => $hide_on_custom_footer_block,
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'            => 'radio-image',
		'settings'        => 'footer_2_color',
		'label'           => __( 'Text color', 'flatsome-admin' ),
		'section'         => 'footer',
		'default'         => 'dark',
		'transport'       => flatsome_customizer_transport(),
		'choices'         => array(
			'dark'  => flatsome_customizer_images_uri() . '/text-light.svg',
			'light' => flatsome_customizer_images_uri() . '/text-dark.svg',
		),
		'active_callback' => $hide_on_custom_footer_block,
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'            => 'color-alpha',
		'alpha'           => true,
		'settings'        => 'footer_2_bg_color',
		'label'           => __( 'Background Color', 'flatsome-admin' ),
		'section'         => 'footer',
		'default'         => '#777',
		'transport'       => flatsome_customizer_transport(),
		'active_callback' => $hide_on_custom_footer_block,
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'            => 'image',
		'settings'        => 'footer_2_bg_image',
		'label'           => __( 'Background Image', 'flatsome-admin' ),
		'section'         => 'footer',
		'default'         => '',
		'transport'       => flatsome_customizer_transport(),
		'active_callback' => $hide_on_custom_footer_block,
	) );

	Flatsome_Option::add_field( '', array(
		'type'     => 'custom',
		'settings' => 'custom_title_footer_absolute',
		'label'    => '',
		'section'  => 'footer',
		'default'  => '<div class="options-title-divider">Absolute Footer</div>',
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'      => 'radio-image',
		'settings'  => 'footer_bottom_text',
		'label'     => __( 'Text color', 'flatsome-admin' ),
		'section'   => 'footer',
		'default'   => 'dark',
		'transport' => flatsome_customizer_transport(),
		'choices'   => array(
			'dark'  => flatsome_customizer_images_uri() . '/text-light.svg',
			'light' => flatsome_customizer_images_uri() . '/text-dark.svg',
		),
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'      => 'radio-buttonset',
		'settings'  => 'footer_bottom_align',
		'label'     => __( 'Align', 'flatsome-admin' ),
		'section'   => 'footer',
		'default'   => '',
		'transport' => flatsome_customizer_transport(),
		'choices'   => array(
			''       => __( 'Left/Right', 'flatsome-admin' ),
			'center' => __( 'Center', 'flatsome-admin' ),
		),
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'      => 'color-alpha',
		'alpha'     => true,
		'settings'  => 'footer_bottom_color',
		'label'     => __( 'Background Color', 'flatsome-admin' ),
		'section'   => 'footer',
		'default'   => '',
		'transport' => flatsome_customizer_transport(),
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'              => 'textarea',
		'settings'          => 'footer_left_text',
		'label'             => __( 'Bottom Text - Primary', 'flatsome-admin' ),
		'description'       => __( 'Add Any HTML or Shortcode here...', 'flatsome-admin' ),
		'section'           => 'footer',
		'transport'         => flatsome_customizer_transport(),
		'sanitize_callback' => 'flatsome_custom_sanitize',
		'default'           => 'Copyright [ux_current_year] &copy; <strong>Flatsome Theme</strong>',
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'              => 'textarea',
		'settings'          => 'footer_right_text',
		'label'             => __( 'Bottom Text - Secondary', 'flatsome-admin' ),
		'description'       => __( 'Add Any HTML or Shortcode here...', 'flatsome-admin' ),
		'section'           => 'footer',
		'transport'         => flatsome_customizer_transport(),
		'sanitize_callback' => 'flatsome_custom_sanitize',
		'default'           => '',
	) );

	$hide_off_back_to_top = array(
		array( 'setting' => 'back_to_top', 'operator' => '==', 'value' => true ),
	);

	Flatsome_Option::add_field( '', array(
		'type'            => 'custom',
		'settings'        => 'back_to_top_button_title',
		'label'           => '',
		'section'         => 'footer',
		'default'         => '<div class="options-title-divider">Back To Top Button</div>',
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'      => 'checkbox',
		'settings'  => 'back_to_top',
		'label'     => __( 'Enable Back To Top Button', 'flatsome-admin' ),
		'section'   => 'footer',
		'default'   => 1,
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'            => 'radio-image',
		'settings'        => 'back_to_top_shape',
		'label'           => __( 'Button Shape', 'flatsome-admin' ),
		'section'         => 'footer',
		'transport'       => flatsome_customizer_transport(),
		'default'         => 'circle',
		'choices'         => array(
			'circle'  => flatsome_customizer_images_uri() . '/back-to-top-outline-circle.svg',
			'square'  => flatsome_customizer_images_uri() . '/back-to-top-outline-square.svg',
		),
		'active_callback' => $hide_off_back_to_top,
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'            => 'radio-buttonset',
		'settings'        => 'back_to_top_position',
		'label'           => __( 'Position', 'flatsome-admin' ),
		'section'         => 'footer',
		'transport'       => flatsome_customizer_transport(),
		'default'         => 'right',
		'choices'         => array(
			'left'  => __( 'Left', 'flatsome-admin' ),
			'right' => __( 'Right', 'flatsome-admin' ),
		),
		'active_callback' => $hide_off_back_to_top,
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'            => 'checkbox',
		'settings'        => 'back_to_top_mobile',
		'label'           => __( 'Show on Mobile', 'flatsome-admin' ),
		'section'         => 'footer',
		'transport'       => flatsome_customizer_transport(),
		'default'         => 0,
		'active_callback' => $hide_off_back_to_top,
	) );

	Flatsome_Option::add_field( '', array(
		'type'            => 'custom',
		'settings'        => 'custom_title_footer_html',
		'label'           => '',
		'section'         => 'footer',
		'active_callback' => $hide_on_custom_footer_block,
		'default'         => '<div class="options-title-divider">Footer HTML</div>',
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'              => 'textarea',
		'settings'          => 'html_before_footer',
		'label'             => __( 'HTML before footer', 'flatsome-admin' ),
		'description'       => __( 'Add Any HTML or Shortcode here...', 'flatsome-admin' ),
		'section'           => 'footer',
		'transport'         => flatsome_customizer_transport(),
		'active_callback'   => $hide_on_custom_footer_block,
		'sanitize_callback' => 'flatsome_custom_sanitize',
		'default'           => '',
	) );

	Flatsome_Option::add_field( 'option', array(
		'type'              => 'textarea',
		'settings'          => 'html_after_footer',
		'label'             => __( 'HTML after footer', 'flatsome-admin' ),
		'description'       => __( 'Add Any HTML or Shortcode here...', 'flatsome-admin' ),
		'section'           => 'footer',
		'transport'         => flatsome_customizer_transport(),
		'active_callback'   => $hide_on_custom_footer_block,
		'sanitize_callback' => 'flatsome_custom_sanitize',
		'default'           => '',
	) );
}
add_action( 'init', 'flatsome_customizer_footer_options' );

function flatsome_refresh_footer_partials( WP_Customize_Manager $wp_customize ) {

	// Abort if selective refresh is not available.
	if ( ! isset( $wp_customize->selective_refresh ) ) {
		return;
	}

	$wp_customize->selective_refresh->add_partial( 'footer-layout', array(
		'selector'        => '.footer-wrapper',
		'settings'        => array(
			'footer_2',
			'footer_1',
			'html_before_footer',
			'html_after_footer',
			'footer_2_color',
			'footer_1_color',
			'footer_2_columns',
			'footer_1_columns',
		),
		'render_callback' => function () {
			get_template_part( 'template-parts/footer/footer' );
		},
	) );

	$wp_customize->selective_refresh->add_partial( 'footer-left-text', array(
		'selector'        => '.copyright-footer',
		'settings'        => array( 'footer_left_text' ),
		'render_callback' => function () {
			return do_shortcode( get_theme_mod( 'footer_left_text', 'Copyright [ux_current_year] &copy; <strong>Flatsome Theme</strong>' ) );
		},
	) );

	$wp_customize->selective_refresh->add_partial( 'footer-right-text', array(
		'selector'        => '.footer-secondary .footer-text',
		'settings'        => array( 'footer_right_text' ),
		'render_callback' => function () {
			return do_shortcode( get_theme_mod( 'footer_right_text', '' ) );
		},
	) );

	$wp_customize->selective_refresh->add_partial( 'footer-absolute', array(
		'selector'            => '.absolute-footer',
		'settings'            => array( 'footer_bottom_align', 'footer_bottom_text' ),
		'container_inclusive' => true,
		'render_callback'     => function () {
			get_template_part( 'template-parts/footer/footer-absolute' );
		},
	) );

	// Refresh custom styling / Colors etc.
	$wp_customize->selective_refresh->add_partial( 'refresh_css_footer', array(
		'selector'            => 'head > style#custom-css',
		'container_inclusive' => true,
		'settings'            => array( 'footer_1_bg_image', 'footer_2_bg_image' ),
		'render_callback'     => function () {
			flatsome_custom_css();
		},
	) );

}

add_action( 'customize_register', 'flatsome_refresh_footer_partials' );
