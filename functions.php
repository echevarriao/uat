<?php require_once(get_template_directory() . "/inc/site.brand.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.header.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.top.menu.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.menu.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.content.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.body.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.subfooter.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.footer.customizer.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.utils-functions.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.eventstype.php"); ?>
<?php require_once(get_template_directory() . "/inc/site.schoolevents.sponsoring-orgs.php"); ?>
<?php

add_action('wp_enqueue_scripts', 'load_eversource_css_js');

function load_eversource_css_js(){

	// remove jQuery
	
	// wp_deregister_script( 'jquery' );
	
	// load default style sheets

	wp_enqueue_style('normalize-style', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('foundation-style', get_template_directory_uri() . '/css/foundation.min.css');
	wp_enqueue_style('site-font-style', get_template_directory_uri() . '/css/fonts.css');
	wp_enqueue_style('site-slippry-style', get_template_directory_uri() . '/slippry/slippry.css');
	wp_enqueue_style('site-style', get_stylesheet_uri());
	wp_enqueue_style('static-overrides-style', get_template_directory_uri() . '/css/app.css');
	
	// load default js
	
	wp_enqueue_script('vendor-jQuery', get_template_directory_uri() . '/js/vendor/jquery.js');
	wp_enqueue_script('vendor-slippry', get_template_directory_uri() . '/slippry/slippry.min.js');
	wp_enqueue_script('foundation-jQuery', get_template_directory_uri() . '/js/foundation.min.js');
	wp_enqueue_script('vendor-modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js');
	
}

function eversource_widgets_init(){
    
	register_sidebar( array(
		'name'          => __( 'Top Right Title Area', 'eversource' ),
		'id'            => 'righttitlearea',
		'description'   => __( 'This widget houses the content in the top right of the site title bar', 'eversource' ),
		'before_widget' => '<div id="%1$s" class="title-area-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Front Page', 'eversource' ),
		'id'            => 'frontpagearea',
		'description'   => __( 'This widget houses the content in the frontpage', 'eversource' ),
		'before_widget' => '<div id="frontpagearea" class="large-12 frontpagearea-%1$s  frontpage-area-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
	register_sidebar( array(
		'name'          => __( 'Subfooter Area', 'eversource' ),
		'id'            => 'subfooterarea',
		'description'   => __( 'This widget houses the content in the subfooter bar', 'eversource' ),
		'before_widget' => '<div id="subfooterarea-%1$s" class="subfooterarea-area-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
	register_sidebar( array(
		'name'          => __( 'Footer Area', 'eversource' ),
		'id'            => 'footerarea',
		'description'   => __( 'This widget houses the content in the footer bar', 'eversource' ),
		'before_widget' => '<div id="footerarea-%1$s" class="footerarea-area-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
}

add_action('widgets_init', 'eversource_widgets_init');

function eversource_theme_setup(){

    // for thumbnails/featured image

	add_theme_support( 'post-thumbnails' );
    
    // post content types
    
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
    
	// This theme uses wp_nav_menu() in two locations.

	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'eversource' ),
		'social'  => __( 'Social Links Menu', 'eversource' ),
        'topmenu' => __( 'Top Menu', 'eversource'),
        'mainmenu' => __( 'Main Menu', 'eversource'),
        'leftmenu'=> __('Left Menu', 'eversource'),
        'rightmenu'=> __('Right Menu', 'eversource'),
        'subfootermenu'=> __('Sub Bottom Menu', 'eversource'),
        'footermenu'=> __('Bottom Menu', 'eversource'),
	) );
   
}

add_action( 'after_setup_theme', 'eversource_theme_setup' );


function display_css_overrides(){
    

}

add_action('wp_footer', 'display_css_overrides');


// nav walker class for Foundation 5 menus

/**
 * Top Bar Walker
 *
 * @since 1.0.0
 */
class Top_Bar_Walker extends Walker_Nav_Menu {
  /**
    * @see Walker_Nav_Menu::start_lvl()
   * @since 1.0.0
   *
   * @param string $output Passed by reference. Used to append additional content.
   * @param int $depth Depth of page. Used for padding.
  */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= "\n<ul class=\"sub-menu dropdown\">\n";
    }

    /**
     * @see Walker_Nav_Menu::start_el()
     * @since 1.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item Menu item data object.
     * @param int $depth Depth of menu item. Used for padding.
     * @param object $args
     */

    function start_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 ) {
        $item_html = '';
        parent::start_el( $item_html, $object, $depth, $args );  

        $output .= ( $depth == 0 ) ? '<li class="divider"></li>' : '';

        $classes = empty( $object->classes ) ? array() : ( array ) $object->classes;  

        if ( in_array('label', $classes) ) {
            $item_html = preg_replace( '/<a[^>]*>( .* )<\/a>/iU', '<label>$1</label>', $item_html );
        }

    if ( in_array('divider', $classes) ) {
      $item_html = preg_replace( '/<a[^>]*>( .* )<\/a>/iU', '', $item_html );
    }

        $output .= $item_html;
    }

  /**
     * @see Walker::display_element()
     * @since 1.0.0
   * 
   * @param object $element Data object
   * @param array $children_elements List of elements to continue traversing.
   * @param int $max_depth Max depth to traverse.
   * @param int $depth Depth of current element.
   * @param array $args
   * @param string $output Passed by reference. Used to append additional content.
   * @return null Null on failure with no changes to parameters.
   */
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
        $element->has_children = !empty( $children_elements[$element->ID] );
        $element->classes[] = ( $element->current || $element->current_item_ancestor ) ? 'active' : '';
        $element->classes[] = ( $element->has_children ) ? 'has-dropdown' : '';

        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

}

