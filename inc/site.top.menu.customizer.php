<?php

function top_menu_brand_customizer($wp_customize){
    
    $configs = array();
   
    $configs['title'] = "Top Menu Branding Section";
    $configs['priority'] = 35;
    
    $wp_customize->add_section('top_menu_branding_section', $configs);

    $wp_customize->add_setting('top_menu_display_toggle', array('default' => 'display'));
    
    $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'top_menu_display_toggle',
        array(
            'label'          => __( 'Show | Hide Top Menu Menu', 'eversource' ),
            'section'        => 'top_menu_branding_section',
            'settings'       => 'top_menu_display_toggle',
            'type'           => 'radio',
            'choices'        => array(
                'display'   => __( 'Display' ),
                'hide'  => __( 'Hide' )
            ),
            'priority' => 4,
        )));

	
    $wp_customize->add_setting('top_menu_bg_type', array('default' => 'default'));
    
    $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'top_menu_bg_type',
        array(
            'label'          => __( 'Use Gradient | Solid Background Color', 'eversource' ),
            'section'        => 'top_menu_branding_section',
            'settings'       => 'top_menu_bg_type',
            'type'           => 'radio',
            'choices'        => array(
                'gradient'   => __( 'Use Gradient' ),
                'default'   => __( 'Default' ),
                'solid'  => __( 'Use solid' )
            ),
            'priority' => 6,
        )));

    $wp_customize->add_setting('top_menu_align', array('default' => 'right'));
    
    $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'top_menu_align',
        array(
            'label'          => __( 'Menu Alignment', 'eversource' ),
            'section'        => 'top_menu_branding_section',
            'settings'       => 'top_menu_align',
            'type'           => 'radio',
            'choices'        => array(
                'right'   => __( 'Right' ),
                'center'   => __( 'Center' ),
                'left'  => __( 'Left' )
            ),
            'priority' => 5,
        )));


    $wp_customize->add_setting('top_menu_solid_bg_color', array('default' => '#eeeff1'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_menu_solid_bg_color', array(
	'label'        => __( 'Solid Bar Color', 'eversource' ),
	'section'    => 'top_menu_branding_section',
	'settings'   => 'top_menu_solid_bg_color',
    'priority' => 10,) ) );


    $wp_customize->add_setting('top_menu_first_gradient_bg_color', array('default' => '#eeeff1'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_menu_first_gradient_bg_color', array(
	'label'        => __( 'First Gradient Background Color', 'eversource' ),
	'section'    => 'top_menu_branding_section',
	'settings'   => 'top_menu_first_gradient_bg_color',
    'priority' => 15,) ) );

        
    $wp_customize->add_setting('top_menu_second_gradient_bg_color', array('default' => '#eeeff1'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_menu_second_gradient_bg_color', array(
	'label'        => __( 'Second Gradient Background Color', 'eversource' ),
	'section'    => 'top_menu_branding_section',
	'settings'   => 'top_menu_second_gradient_bg_color',
    'priority' => 20,) ) );

    $wp_customize->add_setting('top_menu_txt_color', array('default' => '#818284'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_menu_txt_color', array(
	'label'        => __( 'Text Color', 'eversource' ),
	'section'    => 'top_menu_branding_section',
	'settings'   => 'top_menu_txt_color',
    'priority' => 25,) ) );

    $wp_customize->add_setting('top_menu_txt_hover_color', array('default' => '#000000'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_menu_txt_hover_color', array(
	'label'        => __( 'Hover Text Color', 'eversource' ),
	'section'    => 'top_menu_branding_section',
	'settings'   => 'top_menu_txt_hover_color',
    'priority' => 30,) ) );

    $wp_customize->add_setting('top_menu_item_bg_color', array('default' => '#eeeef1'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_menu_item_bg_color', array(
	'label'        => __( 'Menu Item Background Color', 'eversource' ),
	'section'    => 'top_menu_branding_section',
	'settings'   => 'top_menu_item_bg_color',
    'priority' => 35,) ) );

    $wp_customize->add_setting('top_menu_item_hover_bg_color', array('default' => '#ffffff'));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_menu_item_hover_bg_color', array(
	'label'        => __( 'Menu Item Hover Background Color', 'eversource' ),
	'section'    => 'top_menu_branding_section',
	'settings'   => 'top_menu_item_hover_bg_color',
    'priority' => 40,) ) );
	
}

add_action( 'customize_register', 'top_menu_brand_customizer' );