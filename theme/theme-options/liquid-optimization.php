<?php
/*
 * Optimization Section
*/

if ( class_exists( 'Liquid_Elementor_Addons' ) && defined( 'ELEMENTOR_VERSION' )){
    return;
}

$this->sections[] = array(
    'title'  => esc_html__('Optimization', 'hub'),
    'icon'   => 'el el-adjust-alt'  
);

$this->sections[] = array(
    'title'  => esc_html__( 'Optimization', 'hub' ),
    'subsection' => true,
    'desc' => esc_html__( 'We recommend keeping the optimization options disabled while developing the website. You can enable this option to boost the performance once you are done with the development.', 'hub' ),  
    'fields' => array(
        array(
            'id' => 'enable-hub-optimization',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Hub Optimization', 'hub' ),
            'subtitle' => esc_html__( 'Switch on to enable the Hub Optimization', 'hub' ),
            'options'  => array(
                'on'   => esc_html__( 'On', 'hub' ),
                'off'  => esc_html__( 'Off', 'hub' ),
            ),
            'default' => 'off'
        ),
        array(
            'id' => 'enable-hub-header-cache',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Hub Header Cache', 'hub' ),
            'subtitle' => esc_html__( 'Switch on to enable the Hub Header Cache', 'hub' ),
            'options'  => array(
                'on'   => esc_html__( 'On', 'hub' ),
                'off'  => esc_html__( 'Off', 'hub' ),
            ),
            'default' => 'off',
            'required' => array(
                'enable-hub-optimization',
                '=',
                'on'
            ),
        ),

    )
);