<?php

function header_brand_customizer($wp_customize){
    
    $configs = array();
   
    $configs['title'] = "Header Branding Section";
    $configs['priority'] = 30;
    
    $wp_customize->add_section('header_branding_section', $configs);

    $wp_customize->add_setting('header_bg_type', array('default' => 'default'));
    
    $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'header_bg_type',
        array(
            'label'          => __( 'Background Color', 'eversource' ),
            'section'        => 'header_branding_section',
            'settings'       => 'header_bg_type',
            'type'           => 'radio',
            'choices'        => array(
                'gradient'   => __( 'Gradient' ),
                'default'   => __( 'Default' ),
                'solid'  => __( 'Solid' )
            ),
            'priority' => 5,
        )));

    $wp_customize->add_setting('header_solid_bg_color', array('default' => '#EEEFF1'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_solid_bg_color', array(
	'label'        => __( 'Solid Background Color', 'eversource' ),
	'section'    => 'header_branding_section',
	'settings'   => 'header_solid_bg_color',
    'priority' => 10,) ) );

    $wp_customize->add_setting('header_first_gradient_bg_color', array('default' => '#ffffff'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_first_gradient_bg_color', array(
	'label'        => __( 'First Gradient Background Color', 'eversource' ),
	'section'    => 'header_branding_section',
	'settings'   => 'header_first_gradient_bg_color',
    'priority' => 15,) ) );
        
    $wp_customize->add_setting('header_second_gradient_bg_color', array('default' => '#ffffff'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_second_gradient_bg_color', array(
	'label'        => __( 'Second Gradient Background Color', 'eversource' ),
	'section'    => 'header_branding_section',
	'settings'   => 'header_second_gradient_bg_color',
    'priority' => 20,) ) );

    $wp_customize->add_setting('header_primary_title_txt_color', array('default' => '#0B1860'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_primary_title_txt_color', array(
	'label'        => __( 'Site Title Link Color', 'eversource' ),
	'section'    => 'header_branding_section',
	'settings'   => 'header_primary_title_txt_color',
    'priority' => 25,) ) );

    $wp_customize->add_setting('header_primary_title_hover_color', array('default' => '#0B1860'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_primary_title_hover_color', array(
	'label'        => __( 'Site Title Link Hover Color', 'eversource' ),
	'section'    => 'header_branding_section',
	'settings'   => 'header_primary_title_hover_color',
    'priority' => 30,) ) );

    $wp_customize->add_setting('header_secondary_title_txt_color', array('default' => '#a1a1a1'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_secondary_title_txt_color', array(
	'label'        => __( 'Secondary Title Link Color', 'eversource' ),
	'section'    => 'header_branding_section',
	'settings'   => 'header_secondary_title_txt_color',
    'priority' => 35,) ) );

    $wp_customize->add_setting('header_secondary_title_hover_color', array('default' => '#a1a1a1'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_secondary_title_hover_color', array(
	'label'        => __( 'Secondary Title Link Hover Color', 'eversource' ),
	'section'    => 'header_branding_section',
	'settings'   => 'header_secondary_title_hover_color',
    'priority' => 40,) ) );

}

add_action( 'customize_register', 'header_brand_customizer' );