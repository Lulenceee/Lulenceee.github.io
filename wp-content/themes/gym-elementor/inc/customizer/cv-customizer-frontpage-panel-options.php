<?php
/**
 * Gym Elementor manage the Customizer options of frontpage panel.
 *
 * @subpackage gym-elementor
 * @since 1.0 
 */

/* top header section*/

// Toggle field for Enable/Disable top header
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_top_header_section',
		'label'    => __( 'Display Top Header', 'gym-elementor' ),
		'section'  => 'gym_elementor_top_header_section_content',
		'default'  => '0',
		'priority' => 5,
	)
);

// Toggle field for Enable/Disable Social Icon
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_social_top_header_section',
		'label'    => __( 'Display Social Icons', 'gym-elementor' ),
		'section'  => 'gym_elementor_top_header_section_content',
		'default'  => '0',
		'priority' => 10,
		'active_callback' => array(
			array(
				'setting'  => 'gym_elementor_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// facebook url
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'text',
		'settings' => 'gym_elementor_social_fb_button_link',
		'label'    => __( 'Facebook URL', 'gym-elementor' ),
		'section'  => 'gym_elementor_top_header_section_content',
		'default'  => '',
		'priority' => 15,
		'active_callback' => array(
			array(
				'setting'  => 'gym_elementor_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// twitter url
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'text',
		'settings' => 'gym_elementor_social_tw_button_link',
		'label'    => __( 'Twitter URL', 'gym-elementor' ),
		'section'  => 'gym_elementor_top_header_section_content',
		'default'  => '',
		'priority' => 20,
		'active_callback' => array(
			array(
				'setting'  => 'gym_elementor_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// instagram url
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'text',
		'settings' => 'gym_elementor_social_insta_button_link',
		'label'    => __( 'Instagram URL', 'gym-elementor' ),
		'section'  => 'gym_elementor_top_header_section_content',
		'default'  => '',
		'priority' => 25,
		'active_callback' => array(
			array(
				'setting'  => 'gym_elementor_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// linkedin url
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'text',
		'settings' => 'gym_elementor_social_lkdn_button_link',
		'label'    => __( 'Linkedin URL', 'gym-elementor' ),
		'section'  => 'gym_elementor_top_header_section_content',
		'default'  => '',
		'priority' => 30,
		'active_callback' => array(
			array(
				'setting'  => 'gym_elementor_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// pinterest url
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'text',
		'settings' => 'gym_elementor_social_pint_button_link',
		'label'    => __( 'Pinterest URL', 'gym-elementor' ),
		'section'  => 'gym_elementor_top_header_section_content',
		'default'  => '',
		'priority' => 35,
		'active_callback' => array(
			array(
				'setting'  => 'gym_elementor_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// youtube url
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'text',
		'settings' => 'gym_elementor_social_youtube_button_link',
		'label'    => __( 'Youtube URL', 'gym-elementor' ),
		'section'  => 'gym_elementor_top_header_section_content',
		'default'  => '',
		'priority' => 40,
		'active_callback' => array(
			array(
				'setting'  => 'gym_elementor_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable new tab for social icon url
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_new_tab_top_header_section',
		'label'    => __( 'Display Social URL in new Window', 'gym-elementor' ),
		'section'  => 'gym_elementor_top_header_section_content',
		'default'  => '0',
		'priority' => 45,
		'active_callback' => array(
			array(
				'setting'  => 'gym_elementor_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable Contact Number
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_contact_top_header_section',
		'label'    => __( 'Display Contact Number', 'gym-elementor' ),
		'section'  => 'gym_elementor_top_header_section_content',
		'default'  => '0',
		'priority' => 50,
		'active_callback' => array(
			array(
				'setting'  => 'gym_elementor_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Contact Number
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'text',
		'settings' => 'gym_elementor_contact_top_header_section',
		'label'    => __( 'Contact Number', 'gym-elementor' ),
		'section'  => 'gym_elementor_top_header_section_content',
        'default'  => '',
		'priority' => 55,
		'active_callback' => array(
			array(
				'setting'  => 'gym_elementor_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable Address
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_address_top_header_section',
		'label'    => __( 'Display Address', 'gym-elementor' ),
		'section'  => 'gym_elementor_top_header_section_content',
		'default'  => '0',
		'priority' => 60,
		'active_callback' => array(
			array(
				'setting'  => 'gym_elementor_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Address
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'text',
		'settings' => 'gym_elementor_address_top_header_section',
		'label'    => __( 'Address', 'gym-elementor' ),
		'section'  => 'gym_elementor_top_header_section_content',
        'default'  => '',
		'priority' => 65,
		'active_callback' => array(
			array(
				'setting'  => 'gym_elementor_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable Timing
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_timing_top_header_section',
		'label'    => __( 'Display Timing', 'gym-elementor' ),
		'section'  => 'gym_elementor_top_header_section_content',
		'default'  => '0',
		'priority' => 70,
		'active_callback' => array(
			array(
				'setting'  => 'gym_elementor_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Timing
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'text',
		'settings' => 'gym_elementor_timing_top_header_section',
		'label'    => __( 'Timing', 'gym-elementor' ),
		'section'  => 'gym_elementor_top_header_section_content',
        'default'  => '',
		'priority' => 75,
		'active_callback' => array(
			array(
				'setting'  => 'gym_elementor_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

/* end of top header section*/

/* general options */

// Text field for general options
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'text',
		'settings' => 'gym_elementor_readmore_general_section',
		'label'    => __( 'Read More Label', 'gym-elementor' ),
		'section'  => 'gym_elementor_general_section_content',
		'default'  => 'Read More',	
		'priority' => 5,
	)
);

// excerpt length 
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'number',
		'settings' => 'gym_elementor_excerpt_general_section',
		'label'    => __( 'Excerpt Length', 'gym-elementor' ),
		'section'  => 'gym_elementor_general_section_content',
		'description' => __( '0 length will not show the excerpt.', 'gym-elementor' ),
		'default'  => '55',	
		'priority' => 5,
	)
);

/* end of general options */

/* layout options */

// Select field for Theme Layout
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'select',
		'settings' => 'gym_elementor_theme_layout_section',
		'label'    => __( 'Theme Layout', 'gym-elementor' ),
		'description' => __( 'Box layout will be visible at minimum 1200px display', 'gym-elementor' ),
		'section'  => 'gym_elementor_layout_section_content',
		'default'  => 'wide',	
		'priority' => 5,
		'choices'  => array(
			'wide' => __( 'Wide', 'gym-elementor' ),
			'box'  => __( 'Box',  'gym-elementor' ),
		),
	)
);

// Select field for sidebar position
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'select',
		'settings' => 'gym_elementor_sidebar_layout_section',
		'label'    => __( 'Sidebar Position', 'gym-elementor' ),
		'section'  => 'gym_elementor_layout_section_content',
		'default'  => 'right',	
		'priority' => 10,
		'choices'  => array(
			'right' => __( 'Right Sidebar', 'gym-elementor'),
			'left'  => __( 'Left Sidebar',  'gym-elementor'),
			'no'    => __( 'No Sidebar',  'gym-elementor'),
		),
	)
);

/* end of layout options */

/* blog post options */

// Toggle field for Enable/Disable Author
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_author_blog_section',
		'label'    => __( 'Display Author', 'gym-elementor' ),
		'section'  => 'gym_elementor_blog_post_section_content',
		'default'  => '1',
		'priority' => 5,
	)
);

// Toggle field for Enable/Disable Comment Count
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_comment_blog_section',
		'label'    => __( 'Display Comments Count', 'gym-elementor' ),
		'section'  => 'gym_elementor_blog_post_section_content',
		'default'  => '1',
		'priority' => 10,
	)
);

// Toggle field for Enable/Disable Date
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_date_blog_section',
		'label'    => __( 'Display Date on Image', 'gym-elementor' ),
		'section'  => 'gym_elementor_blog_post_section_content',
		'default'  => '1',
		'priority' => 20,
	)
);

// Toggle field for Enable/Disable Featured Image
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_fimage_blog_section',
		'label'    => __( 'Display Featured Image', 'gym-elementor' ),
		'section'  => 'gym_elementor_blog_post_section_content',
		'default'  => '1',
		'priority' => 25,
	)
);

/* end of blog post options */

/* single post options */

// Toggle field for Enable/Disable Author
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_author_single_section',
		'label'    => __( 'Display Author', 'gym-elementor' ),
		'section'  => 'gym_elementor_single_post_section_content',
		'default'  => '1',
		'priority' => 5,
	)
);

// Toggle field for Enable/Disable Comment Count
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_comment_single_section',
		'label'    => __( 'Display Comments Count', 'gym-elementor' ),
		'section'  => 'gym_elementor_single_post_section_content',
		'default'  => '1',
		'priority' => 10,
	)
);

// Toggle field for Enable/Disable Date
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_date_single_section',
		'label'    => __( 'Display Date', 'gym-elementor' ),
		'section'  => 'gym_elementor_single_post_section_content',
		'default'  => '1',
		'priority' => 15,
	)
);

// Toggle field for Enable/Disable Tags
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_tags_single_section',
		'label'    => __( 'Display Tags', 'gym-elementor' ),
		'section'  => 'gym_elementor_single_post_section_content',
		'default'  => '1',
		'priority' => 20,
	)
);

// Toggle field for Enable/Disable Featured Image
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_fimage_single_section',
		'label'    => __( 'Display Featured Image', 'gym-elementor' ),
		'section'  => 'gym_elementor_single_post_section_content',
		'default'  => '1',
		'priority' => 25,
	)
);

/* end of single post options */

/* footer options */

// Toggle field for Enable/Disable Copyright
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_cpright_footer_section',
		'label'    => __( 'Display Copyright Footer', 'gym-elementor' ),
		'section'  => 'gym_elementor_footer_section_content',
		'default'  => '1',
		'priority' => 5,
	)
);

// Textarea field for Footer section content
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'textarea',
		'settings' => 'gym_elementor_cpright_footer_section',
		'label'    => __( 'Team Title', 'gym-elementor' ),
		'section'  => 'gym_elementor_footer_section_content',
		'default'  => 'Powered by WordPress',	
		'priority' => 10,
		'active_callback' => array(
			array(
				'setting'  => 'gym_elementor_enable_cpright_footer_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);


/* end of footer options */

/* advance options */

// Toggle field for Enable/Disable Sticky Header
Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_sticky_header',
		'label'    => __( 'Enable Sticky Header', 'gym-elementor' ),
		'section'  => 'gym_elementor_advance_option_content',
		'default'  => '1',
		'priority' => 5,
	)
);

Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_preloader',
		'label'    => __( 'Enable Preloader', 'gym-elementor' ),
		'section'  => 'gym_elementor_advance_option_content',
		'default'  => '1',
		'priority' => 10,
	)
);

Kirki::add_field(
	'gym_elementor_config', array(
		'type'     => 'toggle',
		'settings' => 'gym_elementor_enable_scroll_top',
		'label'    => __( 'Enable Scroll to Top', 'gym-elementor' ),
		'section'  => 'gym_elementor_advance_option_content',
		'default'  => '1',
		'priority' => 15,
	)
);
/* end of advance options */