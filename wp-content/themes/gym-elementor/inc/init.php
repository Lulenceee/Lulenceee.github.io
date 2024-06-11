<?php 

get_template_part( 'inc/admin-function');

//custom-style
get_template_part( 'inc/gym-elementor-custom-style');

// theme-option
get_template_part( 'lib/texture-option/texture-option');

// customizer
get_template_part('customizer/models/class-gym-elementor-singleton');
get_template_part('customizer/models/class-gym-elementor-defaults-models');
get_template_part('customizer/repeater/class-gym-elementor-repeater');

/*customizer*/

get_template_part('customizer/extend-customizer/class-gym-elementor-wp-customize-panel');
get_template_part('customizer/extend-customizer/class-gym-elementor-wp-customize-section');
get_template_part('customizer/customizer-radio-image/class/class-gym-elementor-customize-control-radio-image');
get_template_part('customizer/customizer-range-value/class/class-gym-elementor-customizer-range-value-control');

get_template_part('customizer/color/class-control-color');
get_template_part('customizer/customize-buttonset/class-control-buttonset');

get_template_part('customizer/background/class-gym-elementor-background-image-control');

get_template_part('customizer/customizer-toggle/class-gym-elementor-toggle-control');

get_template_part('customizer/custom-customizer');
get_template_part('customizer/customizer');

/******************************/
// woocommerce
/******************************/
get_template_part( 'inc/woocommerce/woo-core');
get_template_part( 'inc/woocommerce/woo-function');
get_template_part('inc/woocommerce/woocommerce-ajax');