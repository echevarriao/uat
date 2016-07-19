<?php require_once(get_template_directory() . "/inc/site.css-init.customizer.php"); ?>
<?php edit_post_link( __( 'Edit Content', 'eversource' ), '<hr /><p><span class="txt-white button radius small">', '</span></p>' ); ?>
        </div>
    </div>
<?php if(is_active_sidebar('subfooterarea')): ?>
    <!-- sub-footer area, if necessary -->
    <div class = "long-row" id = "subfooter-box">
        <div class = "row">
            <?php dynamic_sidebar('subfooterarea'); ?>
        </div>
    </div>
<?php endif; ?>

    <!-- footer area -->
    <div class = "long-row" id = "footer-box">
        <div class = "row">
            <div class = "large-12 column left">
                <?php if(is_active_sidebar('footer-section')): ?>
                <?php dynamic_sidebar('footer-section'); ?>
                <?php else: ?>
                <ul id = "default-footer">
                    <li><a href = "http://www.uconn.edu/az">A-Z Index</a></li>
                    <li><a href = "http://www.uconn.edu/">UConn Home</a></li>
                    <li><a href = "http://uconn.edu/disclaimers-privacy-copyright/">Disclaimers, Privacy, &amp; Copyright</a></li>
                    <li><a href = "http://www.uconn.edu/">&copy; <?php print date('Y'); ?> University of Connecticut</a></li>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php if(is_active_sidebar('underfooter-section')): ?>
    <!-- under footer area -->
    <div class = "long-row" id = "under-footer-box">
        <div class = "row">
            <?php dynamic_sidebar('underfooter-section'); ?>
        </div>
    </div>
<?php endif; ?>
</div>
<style type = "text/css">
    /* dynamic overrides goes here */

body{

<?php if($body_props["body_branding_bg_type"] == "solid"): ?>

    background-color: <?php print $body_props['body_solid_bg_color']; ?>;

<?php elseif($body_props["body_branding_bg_type"] == "gradient"): ?>

    background-color: <?php print $body_props['body_first_gradient_bg_color']; ?>;

     /* IE10+ */ 
    background-image: -ms-linear-gradient(top, <?php print $body_props['body_first_gradient_bg_color']; ?> 0%, <?php print $body_props['body_second_gradient_bg_color']; ?> 100%);

    /* Mozilla Firefox */ 
    background-image: -moz-linear-gradient(top, <?php print $body_props['body_first_gradient_bg_color']; ?> 0%, <?php print $body_props['body_second_gradient_bg_color']; ?> 100%);

    /* Opera */ 
    background-image: -o-linear-gradient(top, <?php print $body_props['body_first_gradient_bg_color']; ?> 0%, <?php print $body_props['body_second_gradient_bg_color']; ?> 100%);

    /* Webkit (Safari/Chrome 10) */ 
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php print $body_props['body_first_gradient_bg_color']; ?>), color-stop(100, <?php print $body_props['body_second_gradient_bg_color']; ?>));

    /* Webkit (Chrome 11+) */ 
    background-image: -webkit-linear-gradient(top, <?php print $body_props['body_first_gradient_bg_color']; ?> 0%, <?php print $body_props['body_second_gradient_bg_color']; ?> 100%);

    /* W3C Markup */ 
    background-image: linear-gradient(to bottom, <?php print $body_props['body_first_gradient_bg_color']; ?> 0%, <?php print $body_props['body_second_gradient_bg_color']; ?> 100%);

<?php else: ?>
<?php endif; ?>
}

#header-bar{

<?php if($brand_props["brand_bg_type"] == "solid"): ?>

    background-color: <?php print $brand_props['brand_solid_bg_color']; ?>;

<?php elseif($brand_props["brand_bg_type"] == "gradient"): ?>

    background-color: <?php print $brand_props['brand_first_gradient_bg_color']; ?>;

     /* IE10+ */ 
    background-image: -ms-linear-gradient(top, <?php print $brand_props['brand_first_gradient_bg_color']; ?> 0%, <?php print $brand_props['brand_second_gradient_bg_color']; ?> 100%);

    /* Mozilla Firefox */ 
    background-image: -moz-linear-gradient(top, <?php print $brand_props['brand_first_gradient_bg_color']; ?> 0%, <?php print $brand_props['brand_second_gradient_bg_color']; ?> 100%);

    /* Opera */ 
    background-image: -o-linear-gradient(top, <?php print $brand_props['brand_first_gradient_bg_color']; ?> 0%, <?php print $brand_props['brand_second_gradient_bg_color']; ?> 100%);

    /* Webkit (Safari/Chrome 10) */ 
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php print $brand_props['brand_first_gradient_bg_color']; ?>), color-stop(100, <?php print $brand_props['brand_second_gradient_bg_color']; ?>));

    /* Webkit (Chrome 11+) */ 
    background-image: -webkit-linear-gradient(top, <?php print $brand_props['brand_first_gradient_bg_color']; ?> 0%, <?php print $brand_props['brand_second_gradient_bg_color']; ?> 100%);

    /* W3C Markup */ 
    background-image: linear-gradient(to bottom, <?php print $brand_props['brand_first_gradient_bg_color']; ?> 0%, <?php print $brand_props['brand_second_gradient_bg_color']; ?> 100%);
<?php endif; ?>
    
}

span#uconn-signature a{

<?php

    if($brand_props['brand_uconn_txt_color']):
    println("color: " . $brand_props['brand_uconn_txt_color'] . ";");
    endif;
    
?>
    
}

#separator{

<?php

    if($brand_props['brand_separator_txt_color']):
    println("color: " . $brand_props['brand_separator_txt_color'] . ";");
    endif;

?>

}

span#uconn-fullname a{

<?php

    if($brand_props['brand_univct_txt_color']):
    println("color: " . $brand_props['brand_univct_txt_color'] . ";");
    endif;

?>
    
}

#title-bar{
    
<?php if($title_props["header_bg_type"] == "solid"): ?>

    background-color: <?php print $title_props['header_solid_bg_color']; ?>;

<?php elseif($title_props["header_bg_type"] == "gradient"): ?>

    background-color: <?php $title_props['header_first_gradient_bg_color']; ?>

    background-color: <?php print $brand_props['brand_first_gradient_bg_color']; ?>;
     /* IE10+ */ 
    background-image: -ms-linear-gradient(top, <?php print $title_props['header_first_gradient_bg_color']; ?> 0%, <?php print $title_props['header_second_gradient_bg_color']; ?> 100%);

    /* Mozilla Firefox */ 
    background-image: -moz-linear-gradient(top, <?php print $title_props['header_first_gradient_bg_color']; ?> 0%, <?php print $title_props['header_second_gradient_bg_color']; ?> 100%);

    /* Opera */ 
    background-image: -o-linear-gradient(top, <?php print $title_props['header_first_gradient_bg_color']; ?> 0%, <?php print $title_props['header_second_gradient_bg_color']; ?> 100%);

    /* Webkit (Safari/Chrome 10) */ 
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php print $title_props['header_first_gradient_bg_color']; ?>), color-stop(100, <?php print $title_props['header_second_gradient_bg_color']; ?>));

    /* Webkit (Chrome 11+) */ 
    background-image: -webkit-linear-gradient(top, <?php print $title_props['header_first_gradient_bg_color']; ?> 0%, <?php print $title_props['header_second_gradient_bg_color']; ?> 100%);

    /* W3C Markup */ 
    background-image: linear-gradient(to bottom, <?php print $title_props['header_first_gradient_bg_color']; ?> 0%, <?php print $title_props['header_second_gradient_bg_color']; ?> 100%);
<?php endif; ?>
    
}

h2 span#site-name a{

<?php if($title_props['header_primary_title_txt_color'] != ""): ?>

    color: <?php print $title_props['header_primary_title_txt_color'] ?>;
    
<?php endif; ?>

}

h2 span#site-name a:hover{

<?php if($title_props['header_primary_title_hover_color'] != ""): ?>
    color: <?php print $title_props['header_primary_title_hover_color'] ?>;
<?php endif; ?>

}
    
#top-menu-bar{

<?php if($top_menu["top_menu_display_toggle"] == "hide"): ?>
    display: none;
<?php endif; ?>
<?php if($top_menu["top_menu_bg_type"] == "solid"): ?>

    background-color: <?php print $top_menu['top_menu_solid_bg_color']; ?>;

<?php elseif($top_menu["top_menu_bg_type"] == "gradient"): ?>

    background-color: <?php print $top_menu['top_menu_first_gradient_bg_color']; ?>
     /* IE10+ */ 
    background-image: -ms-linear-gradient(top, <?php print $top_menu['top_menu_first_gradient_bg_color']; ?> 0%, <?php print $top_menu['top_menu_second_gradient_bg_color']; ?> 100%);

    /* Mozilla Firefox */ 
    background-image: -moz-linear-gradient(top, <?php print $top_menu['top_menu_first_gradient_bg_color']; ?> 0%, <?php print $top_menu['top_menu_second_gradient_bg_color']; ?> 100%);

    /* Opera */ 
    background-image: -o-linear-gradient(top, <?php print $top_menu['top_menu_first_gradient_bg_color']; ?> 0%, <?php print $top_menu['top_menu_second_gradient_bg_color']; ?> 100%);

    /* Webkit (Safari/Chrome 10) */ 
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php print $top_menu['top_menu_first_gradient_bg_color']; ?>), color-stop(100, <?php print $top_menu['top_menu_second_gradient_bg_color']; ?>));

    /* Webkit (Chrome 11+) */ 
    background-image: -webkit-linear-gradient(top, <?php print $top_menu['top_menu_first_gradient_bg_color']; ?> 0%, <?php print $top_menu['top_menu_second_gradient_bg_color']; ?> 100%);

    /* W3C Markup */ 
    background-image: linear-gradient(to bottom, <?php print $top_menu['top_menu_first_gradient_bg_color']; ?> 0%, <?php print $top_menu['top_menu_second_gradient_bg_color']; ?> 100%);

<?php else: ?>
<?php endif; ?>
    
}

#topmenubar{

<?php if($top_menu['top_menu_align'] == "right"): ?>
    position: relative;
    float: right;
<?php elseif($top_menu['top_menu_align'] == "center"): ?>
    position: relative;
    margin-left: auto;
    margin-right: auto;
<?php elseif($top_menu['top_menu_align'] == "left"): ?>
    position: relative;
    float: left;
<?php endif; ?>

}

#topmenubar li a{

<?php if($top_menu['top_menu_txt_color'] != ""): ?>
    color: <?php print $top_menu['top_menu_txt_color'] ?>;
<?php endif; ?>
<?php if($top_menu['top_menu_item_bg_color'] != ""): ?>
    background-color: <?php print $top_menu['top_menu_item_bg_color'] ?>;
<?php endif; ?>

}

#topmenubar li a:hover{

<?php if($top_menu['top_menu_txt_hover_color'] != ""): ?>
    color: <?php print $top_menu['top_menu_txt_hover_color'] ?>;
<?php endif; ?>
<?php if($top_menu['top_menu_item_hover_bg_color'] != ""): ?>
    background-color: <?php print $top_menu['top_menu_item_hover_bg_color'] ?>;
<?php endif; ?>

}

#main-menu-bar{
	
<?php if($main_menu_props["main_menu_branding_bg_type"] == "solid"): ?>
    background-color: <?php print $main_menu_props['main_menu_solid_bg_color']; ?>;
<?php endif; ?>
	
}

.top-bar-section li:not(.has-form) a:not(.button), .top-bar-section .dropdown li:not(.has-form):not(.active) > a:not(.button){

/* #main-menu-bar, .top-bar-section ul li, .top-bar, .top-bar-section li:not(.has-form) a:not(.button){ */

<?php if($main_menu_props["main_menu_branding_bg_type"] == "solid"): ?>
    background-color: <?php print $main_menu_props['main_menu_solid_bg_color']; ?>;
<?php elseif($main_menu_props["main_menu_branding_bg_type"] == "gradient"): ?>
    background-color: <?php print $main_menu_props['main_menu_first_gradient_bg_color']; ?>;
     /* IE10+ */ 
    background-image: -ms-linear-gradient(top, <?php print $main_menu_props['main_menu_first_gradient_bg_color']; ?> 0%, <?php print $main_menu_props['main_menu_second_gradient_bg_color']; ?> 100%);
    /* Mozilla Firefox */ 
    background-image: -moz-linear-gradient(top, <?php print $main_menu_props['main_menu_first_gradient_bg_color']; ?> 0%, <?php print $main_menu_props['main_menu_second_gradient_bg_color']; ?> 100%);
    /* Opera */ 
    background-image: -o-linear-gradient(top, <?php print $main_menu_props['main_menu_first_gradient_bg_color']; ?> 0%, <?php print $main_menu_props['main_menu_second_gradient_bg_color']; ?> 100%);
    /* Webkit (Safari/Chrome 10) */ 
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php print $main_menu_props['main_menu_first_gradient_bg_color']; ?>), color-stop(100, <?php print $main_menu_props['main_menu_second_gradient_bg_color']; ?>));
    /* Webkit (Chrome 11+) */ 
    background-image: -webkit-linear-gradient(top, <?php print $main_menu_props['main_menu_first_gradient_bg_color']; ?> 0%, <?php print $main_menu_props['main_menu_second_gradient_bg_color']; ?> 100%);
    /* W3C Markup */ 
    background-image: linear-gradient(to bottom, <?php print $main_menu_props['main_menu_first_gradient_bg_color']; ?> 0%, <?php print $main_menu_props['main_menu_second_gradient_bg_color']; ?> 100%);
<?php endif; ?>

}

.top-bar {
	
	<?php if($main_menu_props['main_menu_solid_bar_bg_color'] != ""): ?>
	background-color: <?php print $main_menu_props['main_menu_solid_bar_bg_color'] ?>;
	<?php endif; ?>
	
}

.top-bar-section .dropdown li:not(.has-form):not(.active)>a:not(.button), .top-bar-section ul li a{
	
	<?php if($main_menu_props['main_menu_txt_color'] != ""): ?>
	color: <?php print $main_menu_props['main_menu_txt_color']; ?>;
	<?php endif; ?>
	<?php if($main_menu_props['main_menu_item_bg_color'] != ""): ?>
	background-color: <?php print $main_menu_props['main_menu_item_bg_color']; ?>;
	<?php endif; ?>

}

.top-bar-section ul li a:hover{

	<?php if($main_menu_props['main_menu_item_hover_bg_color'] != ""): ?>
	background-color: <?php print $main_menu_props['main_menu_item_hover_bg_color']; ?>;
	<?php endif; ?>
	<?php if($main_menu_props['main_menu_txt_hover_color'] != ""): ?>
	color: <?php print $main_menu_props['main_menu_txt_hover_color']; ?>;
	<?php endif; ?>
	
}

#content-box{
    
<?php if($content_props["main_content_branding_bg_type"] == "solid" || $content_props["main_content_branding_bg_type"] == "default" || $content_props["main_content_branding_bg_type"] == ""): ?>

    background-color: <?php print $content_props['main_content_solid_bg_color']; ?>;

<?php elseif($content_props["main_content_branding_bg_type"] == "gradient"): ?>

    background-color: <?php print $content_props['main_content_first_gradient_bg_color']; ?>;
     /* IE10+ */ 
    background-image: -ms-linear-gradient(top, <?php print $content_props['main_content_first_gradient_bg_color']; ?> 0%, <?php print $content_props['main_content_second_gradient_bg_color']; ?> 100%);

    /* Mozilla Firefox */ 
    background-image: -moz-linear-gradient(top, <?php print $content_props['main_content_first_gradient_bg_color']; ?> 0%, <?php print $content_props['main_content_second_gradient_bg_color']; ?> 100%);

    /* Opera */ 
    background-image: -o-linear-gradient(top, <?php print $content_props['main_content_first_gradient_bg_color']; ?> 0%, <?php print $content_props['main_content_second_gradient_bg_color']; ?> 100%);

    /* Webkit (Safari/Chrome 10) */ 
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php print $content_props['main_content_first_gradient_bg_color']; ?>), color-stop(100, <?php print $content_props['main_content_second_gradient_bg_color']; ?>));

    /* Webkit (Chrome 11+) */ 
    background-image: -webkit-linear-gradient(top, <?php print $content_props['main_content_first_gradient_bg_color']; ?> 0%, <?php print $content_props['main_content_second_gradient_bg_color']; ?> 100%);

    /* W3C Markup */ 
    background-image: linear-gradient(to bottom, <?php print $content_props['main_content_first_gradient_bg_color']; ?> 0%, <?php print $content_props['main_content_second_gradient_bg_color']; ?> 100%);

<?php else: ?>

<?php endif; ?>
    
}

#subfooter-box{
    
<?php if($subfooter_props["subfooter_branding_display_type"] == "hide"): ?>
    display: none;
<?php endif; ?>
<?php if($subfooter_props["subfooter_branding_bg_type"] == "solid"): ?>

    background-color: <?php print $subfooter_props['subfooter_solid_bg_color']; ?>;

<?php elseif($subfooter_props["subfooter_branding_bg_type"] == "gradient"): ?>

    background-color: <?php print $subfooter_props['subfooter_first_gradient_bg_color']; ?>;
     /* IE10+ */ 
    background-image: -ms-linear-gradient(top, <?php print $subfooter_props['subfooter_first_gradient_bg_color']; ?> 0%, <?php print $subfooter_props['subfooter_second_gradient_bg_color']; ?> 100%);

    /* Mozilla Firefox */ 
    background-image: -moz-linear-gradient(top, <?php print $subfooter_props['subfooter_first_gradient_bg_color']; ?> 0%, <?php print $subfooter_props['subfooter_second_gradient_bg_color']; ?> 100%);

    /* Opera */ 
    background-image: -o-linear-gradient(top, <?php print $subfooter_props['subfooter_first_gradient_bg_color']; ?> 0%, <?php print $subfooter_props['subfooter_second_gradient_bg_color']; ?> 100%);

    /* Webkit (Safari/Chrome 10) */ 
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php print $subfooter_props['subfooter_first_gradient_bg_color']; ?>), color-stop(100, <?php print $subfooter_props['subfooter_second_gradient_bg_color']; ?>));

    /* Webkit (Chrome 11+) */ 
    background-image: -webkit-linear-gradient(top, <?php print $subfooter_props['subfooter_first_gradient_bg_color']; ?> 0%, <?php print $subfooter_props['subfooter_second_gradient_bg_color']; ?> 100%);

    /* W3C Markup */ 
    background-image: linear-gradient(to bottom, <?php print $subfooter_props['subfooter_first_gradient_bg_color']; ?> 0%, <?php print $subfooter_props['subfooter_second_gradient_bg_color']; ?> 100%);

<?php else: ?>
<?php endif; ?>
    
}

#footer-box{
    
<?php if($footer_props["footer_branding_bg_type"] == "solid"): ?>

    background-color: <?php print $footer_props['footer_solid_bg_color']; ?>;

<?php elseif($footer_props["footer_branding_bg_type"] == "gradient"): ?>

    background-color: <?php print $footer_props['footer_first_gradient_bg_color']; ?>;
     /* IE10+ */ 
    background-image: -ms-linear-gradient(top, <?php print $footer_props['footer_first_gradient_bg_color']; ?> 0%, <?php print $footer_props['footer_second_gradient_bg_color']; ?> 100%);

    /* Mozilla Firefox */ 
    background-image: -moz-linear-gradient(top, <?php print $footer_props['footer_first_gradient_bg_color']; ?> 0%, <?php print $footer_props['footer_second_gradient_bg_color']; ?> 100%);

    /* Opera */ 
    background-image: -o-linear-gradient(top, <?php print $footer_props['footer_first_gradient_bg_color']; ?> 0%, <?php print $footer_props['footer_second_gradient_bg_color']; ?> 100%);

    /* Webkit (Safari/Chrome 10) */ 
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php print $footer_props['footer_first_gradient_bg_color']; ?>), color-stop(100, <?php print $brand_props['footer_second_gradient_bg_color']; ?>));

    /* Webkit (Chrome 11+) */ 
    background-image: -webkit-linear-gradient(top, <?php print $footer_props['footer_first_gradient_bg_color']; ?> 0%, <?php print $footer_props['footer_second_gradient_bg_color']; ?> 100%);

    /* W3C Markup */ 
    background-image: linear-gradient(to bottom, <?php print $footer_props['footer_first_gradient_bg_color']; ?> 0%, <?php print $footer_props['footer_second_gradient_bg_color']; ?> 100%);

<?php else: ?>
<?php endif; ?>
   
}

ul#default-footer li a, ul#default-footer li {

<?php if($footer_props['footer_link_color'] != ""): ?>
    color: <?php print $footer_props['footer_link_color']; ?>;
<?php endif; ?>
<?php if($footer_props['footer_link_bg_color'] != ""): ?>
    background-color: <?php print $footer_props['footer_link_bg_color']; ?>;
<?php endif; ?>
    
}

ul#default-footer li a:hover{
    
<?php if($footer_props['footer_hover_link_color'] != ""): ?>
    color: <?php print $footer_props['footer_hover_link_color']; ?>;
<?php endif; ?>
<?php if($footer_props['footer_hover_link_bg_color'] != ""): ?>
    background-color: <?php print $footer_props['footer_hover_link_bg_color']; ?>;
<?php endif; ?>
    
}

</style>
<?php wp_footer(); ?>
<script language = "javascript" type = "text/javascript">
    	
    /* foundation init */
    
    $(document).foundation();
    
</script>
</body>
</html>