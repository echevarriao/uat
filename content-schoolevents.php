<h2 class = "content-title"><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php $event = get_post_custom($post->ID); ?>
<?php print_r( $event); ?>
