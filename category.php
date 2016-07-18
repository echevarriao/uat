<?php get_header(); ?>

<h2 class = "content-title">Category: <?php print get_the_category(); ?></h2>
        
<div class = "large-12 column left" id = "category-column">
<?php if(have_posts()): ?>
    
<?php while(have_posts()): the_post(); ?>
    <div class = "category-row long-row">
<?php get_template_part('content', 'category'); ?>
    </div>
<?php endwhile; ?>

<?php else: ?>

    <div class = "category-row long-row">
<?php get_template_part('content', '404'); ?>
    </div>
<?php endif; ?>
</div>

<?php get_footer(); ?>