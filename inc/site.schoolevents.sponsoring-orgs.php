<?php

add_action('admin_menu', 'events_depts_add_page');

function events_depts_add_page(){
    
    add_submenu_page('edit.php?post_type=schoolevents', 'Sponsoring Organizations Listing', 'Sponsoring Organizations', 'edit_posts', basename(__FILE__), 'event_sponsoring_orgs');
    
}

function event_sponsoring_orgs(){
    
    include(get_template_directory() . "/inc/event-menus/event-sponsoring-orgs.php");

}

add_filter( 'manage_edit-schoolevents_columns', 'schoolevents_mod_columns' ) ;

function schoolevents_mod_columns( $columns ) {

	$columns = array(
		'cb' => '<input type="checkbox" />',
		'title' => __( 'Event Name' ),
		'start_evt_date' => __( 'Date of Event' ),
		'evtcategory' => __( 'Event Categories' ),
		'date' => __( 'Date Posted' )
	);

	return $columns;
}

add_filter( 'manage_edit-schoolevents_sortable_columns', 'schoolevents_mod_sortable_columns' );

function schoolevents_mod_sortable_columns( $columns ) {

	$columns['start_evt_date'] = 'start_evt_date';

	return $columns;

}

add_action( 'manage_schoolevents_posts_custom_column', 'manage_schoolevents_columns', 10, 2 );

function manage_schoolevents_columns( $column, $post_id ) {
    
	global $post;

	switch( $column ) {

		/* If displaying the 'start_evt_time' column. */
		case 'start_evt_date' :

			/* Get the post meta. */
			$start_evt_time = get_post_meta( $post_id, 'start_evt_date', true );

			/* If no duration is found, output a default message. */
			if ( empty( $start_evt_date) && $start_evt_time == "" ){

				echo __( '' );
                
			} else { /* If there is a duration, append 'minutes' to the text string. */

            $start_evt_time = date('F d, Y', strtotime($start_evt_time));
				printf('%s', $start_evt_time);
			}

			break;

		/* If displaying the 'evtcategory' column. */
		case 'evtcategory' :

			/* Get the genres for the post. */
			$terms = get_the_terms( $post_id, 'evtcategory' );

			/* If terms were found. */
			if ( !empty( $terms ) ) {

				$out = array();

				/* Loop through each term, linking to the 'edit posts' page for the specific term. */
				foreach ( $terms as $term ) {

					$out[] = sprintf( '<a href="%s">%s</a>',
						esc_url( add_query_arg( array( 'post_type' => $post->post_type, 'evtcategory' => $term->slug ), 'edit.php' ) ),
						esc_html( sanitize_term_field( 'name', $term->name, $term->term_id, 'evtcategory', 'display' ) )
					);

				}

				echo join( ', ', $out ); /* Join the terms, separating them with a comma. */
                
			} else { /* If no terms were found, output a default message. */

				_e( '' );

			}

			break;

		/* Just break out of the switch statement for everything else. */
		default :
			break;
	}
}

/* Only run our customization on the 'edit.php' page in the admin. */
add_action( 'load-edit.php', 'my_edit_schoolevents_load' );

function my_edit_schoolevents_load() {

	add_filter( 'request', 'my_sort_schoolevents' );

}

/* Sorts the schoolevents */

function my_sort_schoolevents( $vars ) {

	/* Check if we're viewing the 'schoolevents' post type. */
	if ( isset( $vars['post_type'] ) && 'schoolevents' == $vars['post_type'] ) {

		/* Check if 'orderby' is set to 'start_evt_date'. */
		if ( isset( $vars['orderby'] ) && 'start_evt_date' == $vars['orderby'] ) {

			/* Merge the query vars with our custom variables. */
			$vars = array_merge(
				$vars,
				array(
					'meta_key' => 'start_evt_date',
                    'meta_type' => 'DATE',
					'orderby' => 'meta_value'
				)
			);
		}
	}

	return $vars;
}