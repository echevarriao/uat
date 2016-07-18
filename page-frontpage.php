<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>

<?php if(have_posts()): ?>

<?php if(is_active_sidebar('frontpagearea')): ?>
<?php dynamic_sidebar('frontpagearea'); ?>
<?php endif; ?>

<?php while(have_posts()): the_post(); ?>

<?php the_content(); ?>

<?php endwhile; ?>

<?php else: ?>

<?php get_template_part('content', '404'); ?>

<?php endif; ?>

<?php get_footer(); ?>