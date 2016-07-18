<?php get_header(); ?>

<?php if(have_posts()): ?>

<?php while(have_posts()): the_post(); ?>

<?php the_content(); ?>

<?php edit_post_link( __( 'Edit Content', 'eversource' ), '<hr /><p><span class="txt-white button radius small">', '</span></p>' ); ?>

<?php endwhile; ?>

<?php else: ?>

<?php get_template_part('content', '404'); ?>

<?php endif; ?>

<?php get_footer(); ?>