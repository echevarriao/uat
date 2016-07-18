<?php get_header(); ?>
<div class = "long-row">
    <div class = "row">
        <div class = "large-12">
<h2 class = "content-title">
    Archives: <?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'eversource' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'eversource' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'eversource' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'eversource' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'eversource' ) ) . '</span>' );
					elseif( get_post_type() == "schoolevents"):
						printf( __( 'Events: %s', 'eversource' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'eversource' ) ) . '</span>' );
					else :
						_e( 'Archive Type Not Available', 'eversource' );
					endif;
				?>    
    
</h2>

<?php if(have_posts()): ?>

<?php while(have_posts()): the_post(); ?>

<?php get_template_part('content', 'archive'); ?>
                                                                                                                                                                                                                                             
<?php endwhile; ?>

<?php else: ?>

<?php get_template_part('content', '404'); ?>

<?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>