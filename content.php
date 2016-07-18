<?php if(have_posts()): ?>

<?php the_post(); ?>
<?php print get_post_format(); ?>
<?php get_template_part('content', get_post_format()); ?>

<?php else: ?>

<?php get_template_part('content', '404'); ?>

<?php endif; ?>
