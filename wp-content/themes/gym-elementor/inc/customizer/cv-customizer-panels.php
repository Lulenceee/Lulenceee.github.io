<?php
/**
 * Gym Elementor manage the Customizer panels.
 *
 * @subpackage gym-elementor
 * @since 1.0 
 */

/**
 * General Settings Panel
 */
Kirki::add_panel( 'gym_elementor_general_panel', array(
	'priority' => 10,
	'title'    => __( 'General Settings', 'gym-elementor' ),
) );

/**
 * Gym Elementor Options
 */
Kirki::add_panel( 'gym_elementor_options_panel', array(
	'priority' => 20,
	'title'    => __( 'Gym Elementor Theme Options', 'gym-elementor' ),
) );