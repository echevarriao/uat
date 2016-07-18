<?php get_header(); ?>
<?php

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

query_posts($query_string . "&post_type=schoolevents&posts_per_page=10&orderby=title&order=asc&paged=$paged");

?>

<h2 class = "content-title"><?php print single_cat_title( '', false ) ?> Staff</h2>

<?php get_search_form(); ?>

<?php if(have_posts()){ ?>

<?php $theNav = paginate_links(); ?>
<?php echo "<p>$theNav</p>"; ?>
<?php

$opts = array("order" => "asc", "taxonomy" => "staff", "title_li" => "<p><b>Departments | Offices</b></p>");

?>
<ul>
<?php wp_list_categories($opts); ?> 
</ul>

<?php // wpbeginner_numeric_posts_nav(); ?>
<div class = "tableData large-12">
<?php while(have_posts()): the_post(); ?>
    <div class = "large-12 rowData columns rowhighlight" onClick = "location.href = '<?php the_permalink(); ?>';">
        <div class = "large-2 left column">
<?php

    $featured_image_inf = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
    $featured_image = $featured_image_inf[0];

	if(!$featured_image):
	
	$featured_image = get_template_directory_uri() . "/images/uconn-castleman-lawn.jpg";
	
	endif; 
    
?>
<p><img src = "<?php print $featured_image; ?>" class = "alignleft" alt = "featured image" /></p>
<p class = "text-center"><a href="<?php the_permalink(); ?>" class = "button tiny radius">View Profile</a></p>
        </div>
        <div class = "large-10 right column">
<p><b>Staff: </b><?php the_title(); ?><br />
<b>Title: </b> <?php print get_post_meta($post->ID, 'staffinfo_title', true); ?><br />
<b>Office Phone: </b> <?php print get_post_meta($post->ID, 'staffinfo_tel', true); ?><br />
<b>Location: </b> <?php print get_post_meta($post->ID, "staffinfo_loc", true); ?><br />
<b>U-Box: </b> <?php print get_post_meta($post->ID, "staffinfo_ubx", true); ?><br />
<b>Department/Office: </b><?php
$terms = get_the_terms( $post->ID , 'staff' );
$output = "";

$separator = ", ";

if($terms){
    
foreach ( $terms as $term ) {

		$output .= '<a href="'.get_category_link($term).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $term->name ) ) . '">'.$term->name.'</a>'.$separator;

}

} else {
    
    $output = "No keywords available";
    
}

print trim($output, $separator);

?>        </p>
        </div>
    </div>
    
<?php endwhile; ?>
</div>
<?php $theNav = paginate_links(); ?>
<?php echo "<p>$theNav</p>"; ?>

<?php } else { ?>

<?php get_template_part('content', 'none'); ?>

<?php } ?>

<?php get_footer(); ?>