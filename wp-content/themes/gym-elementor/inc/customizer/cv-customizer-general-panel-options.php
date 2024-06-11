<?php
/**
 * Gym Elementor manage the Customizer options of general panel.
 *
 * @subpackage gym-elementor
 * @since 1.0 
 */
Kirki::add_field(
	'gym_elementor_config', array(
		'type'        => 'checkbox',
		'settings'    => 'gym_elementor_home_posts',
		'label'       => esc_attr__( 'Checked to hide latest posts in homepage.', 'gym-elementor' ),
		'section'     => 'static_front_page',
		'default'     => true,
	)
);
