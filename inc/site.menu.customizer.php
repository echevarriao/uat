<?php

function menu_brand_customizer($wp_customize){

    $configs = array();
   
    $configs['title'] = "Main Menu Section";
    $configs['priority'] = 40;
    
    $wp_customize->add_section('main_menu_branding_section', $configs);

    $wp_customize->add_setting('main_menu_branding_bg_type', array('default' => 'default'));
    
    $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'main_menu_branding_bg_type',
        array(
            'label'          => __( 'Use Gradient | Solid Background Color', 'eversource' ),
            'section'        => 'main_menu_branding_section',
            'settings'       => 'main_menu_branding_bg_type',
            'type'           => 'radio',
            'choices'        => array(
                'gradient'   => __( 'Use gradient' ),
                'default'   => __( 'Default' ),
                'solid'  => __( 'Use solid' )
            ),
            'priority' => 5,
        )));
    $wp_customize->add_setting('main_menu_solid_bg_color', array('default' => '#ffffff'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_menu_solid_bg_color', array(
	'label'        => __( 'Solid Bar Color', 'eversource' ),
	'section'    => 'main_menu_branding_section',
	'settings'   => 'main_menu_solid_bg_color',
    'priority' => 10,) ) );


    $wp_customize->add_setting('main_menu_first_gradient_bg_color', array('default' => '#ffffff'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_menu_first_gradient_bg_color', array(
	'label'        => __( 'First Gradient Background Color', 'eversource' ),
	'section'    => 'main_menu_branding_section',
	'settings'   => 'main_menu_first_gradient_bg_color',
    'priority' => 15,) ) );

        
    $wp_customize->add_setting('main_menu_second_gradient_bg_color', array('default' => '#ffffff'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_menu_second_gradient_bg_color', array(
	'label'        => __( 'Second Gradient Background Color', 'eversource' ),
	'section'    => 'main_menu_branding_section',
	'settings'   => 'main_menu_second_gradient_bg_color',
    'priority' => 20,) ) );

    $wp_customize->add_setting('main_menu_solid_bar_bg_color', array('default' => '#333333'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_menu_solid_bar_bg_color', array(
	'label'        => __( 'Bar Background Color', 'eversource' ),
	'section'    => 'main_menu_branding_section',
	'settings'   => 'main_menu_solid_bar_bg_color',
    'priority' => 25,) ) );
    $wp_customize->add_setting('main_menu_txt_color', array('default' => '#ffffff'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_menu_txt_color', array(
	'label'        => __( 'Menu Item Text Color', 'eversource' ),
	'section'    => 'main_menu_branding_section',
	'settings'   => 'main_menu_txt_color',
    'priority' => 30,) ) );
    $wp_customize->add_setting('main_menu_txt_hover_color', array('default' => '#ffffff'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_menu_txt_hover_color', array(
	'label'        => __( 'Menu Item Text Hover Color', 'eversource' ),
	'section'    => 'main_menu_branding_section',
	'settings'   => 'main_menu_txt_hover_color',
    'priority' => 35,) ) );
    $wp_customize->add_setting('main_menu_item_bg_color', array('default' => '#e1e1e1'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_menu_item_bg_color', array(
	'label'        => __( 'Menu Item Background Color', 'eversource' ),
	'section'    => 'main_menu_branding_section',
	'settings'   => 'main_menu_item_bg_color',
    'priority' => 40,) ) );
    $wp_customize->add_setting('main_menu_item_hover_bg_color', array('default' => '#000000'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_menu_item_hover_bg_color', array(
	'label'        => __( 'Menu Item Hover Background Color', 'eversource' ),
	'section'    => 'main_menu_branding_section',
	'settings'   => 'main_menu_item_hover_bg_color',
    'priority' => 45,) ) );

}

add_action( 'customize_register', 'menu_brand_customizer' );