<?php
/**
 * Recommended plugins
 *
 * @package gym-elementor
 */

if ( ! function_exists( 'gym_elementor_recommended_plugins' ) ) :

    /**
     * Recommend plugins.
     *
     * @since 1.0.0
     */
    function gym_elementor_recommended_plugins() {

        $plugins = array(  

            array(
                'name'     => esc_html__( 'Testerwp Ecommerce Companion', 'gym-elementor' ),
                'slug'     => 'testerwp-ecommerce-companion',
                'required' => false,
            ),              
            array(
                'name'     => esc_html__( 'One Click Demo Import', 'gym-elementor' ),
                'slug'     => 'one-click-demo-import',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'Elementor Website Builder', 'gym-elementor' ),
                'slug'     => 'elementor',
                'required' => false,
            ),
             array(
                'name'     => esc_html__( 'ElementsKit Lite', 'gym-elementor' ),
                'slug'     => 'elementskit-lite',
                'required' => false,
            ),
             array(
                'name'     => esc_html__( 'WooCommerce', 'gym-elementor' ),
                'slug'     => 'woocommerce',
                'required' => false,
            ),
        );

        tgmpa( $plugins );

    }

endif;

add_action( 'tgmpa_register', 'gym_elementor_recommended_plugins' );