<?php

function footer_brand_customizer($wp_customize){

    $configs = array();
   
    $configs['title'] = "Footer Section";
    $configs['priority'] = 55;
    
    $wp_customize->add_section('footer_branding_section', $configs);

    $wp_customize->add_setting('footer_branding_bg_type', array('default' => 'default'));
    
    $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_branding_bg_type',
        array(
            'label'          => __( 'Use Gradient | Solid Background Color', 'eversource' ),
            'section'        => 'footer_branding_section',
            'settings'       => 'footer_branding_bg_type',
            'type'           => 'radio',
            'choices'        => array(
                'gradient'   => __( 'Use gradient' ),
                'default'   => __( 'Default' ),
                'solid'  => __( 'Use solid' )
            ),
            'priority' => 5,
        )));
    $wp_customize->add_setting('footer_solid_bg_color', array('default' => '#000e2f'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_solid_bg_color', array(
	'label'        => __( 'Solid Background Color', 'eversource' ),
	'section'    => 'footer_branding_section',
	'settings'   => 'footer_solid_bg_color',
    'priority' => 10,) ) );


    $wp_customize->add_setting('footer_first_gradient_bg_color', array('default' => '#ffffff'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_first_gradient_bg_color', array(
	'label'        => __( 'First Gradient Background Color', 'eversource' ),
	'section'    => 'footer_branding_section',
	'settings'   => 'footer_first_gradient_bg_color',
    'priority' => 15,) ) );

        
    $wp_customize->add_setting('footer_second_gradient_bg_color', array('default' => '#ffffff'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_second_gradient_bg_color', array(
	'label'        => __( 'Second Gradient Background Color', 'eversource' ),
	'section'    => 'footer_branding_section',
	'settings'   => 'footer_second_gradient_bg_color',
    'priority' => 20,) ) );

    $wp_customize->add_setting('footer_link_color', array('default' => '#ffffff'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link_color', array(
	'label'        => __( 'Link Color', 'eversource' ),
	'section'    => 'footer_branding_section',
	'settings'   => 'footer_link_color',
    'priority' => 25,) ) );

    $wp_customize->add_setting('footer_hover_link_color', array('default' => '#000000'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_hover_link_color', array(
	'label'        => __( 'Link Hover Color', 'eversource' ),
	'section'    => 'footer_branding_section',
	'settings'   => 'footer_hover_link_color',
    'priority' => 30,) ) );

    $wp_customize->add_setting('footer_link_bg_color', array('default' => '#000e2f'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link_bg_color', array(
	'label'        => __( 'Link Background Color', 'eversource' ),
	'section'    => 'footer_branding_section',
	'settings'   => 'footer_link_bg_color',
    'priority' => 35,) ) );

    $wp_customize->add_setting('footer_hover_link_bg_color', array('default' => '#ffffff'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_hover_link_bg_color', array(
	'label'        => __( 'Link Hover Background Color', 'eversource' ),
	'section'    => 'footer_branding_section',
	'settings'   => 'footer_hover_link_bg_color',
    'priority' => 40,) ) );

    $wp_customize->add_setting('footer_hover_link_cpyr_color', array('default' => '#ffffff'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_hover_link_cpyr_color', array(
	'label'        => __( 'Copyright Text Color', 'eversource' ),
	'section'    => 'footer_branding_section',
	'settings'   => 'footer_hover_link_cpyr_color',
    'priority' => 45,) ) );
	
	

}

add_action( 'customize_register', 'footer_brand_customizer' );