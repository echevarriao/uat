<?php get_header(); ?>
<div class = "long-row">
    <div class = "row">
        
<?php if(have_posts()): ?>

<?php while(have_posts()): the_post(); ?>

<?php get_template_part('content', 'author'); ?>

<?php endwhile; ?>

<?php else: ?>

<?php get_template_part('content', '404'); ?>

<?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>