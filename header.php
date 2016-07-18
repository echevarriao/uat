<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9]>
<html id="ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 10]>
<html id="ie10" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 11]>
<html id="ie11" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) | !(IE 9) | !(IE 10) | !(IE 11)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name = "robots" content = "all, index, follow" />
<meta http-equiv = "CACHE-CONTROL" content = "CACHE" />
<meta http-equiv = "PRAGMA" content = "CACHE" />
    <title></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body>
<div id = "wrapper" class = "long-row">
    <!-- header with brand standard -->
    <div class = "long-row" id = "header-bar"><!-- brand bar -->
        <div class = "row" id = "header-box">
            <div class = "large-8 column"><!-- brand box: uconn | university of connecticut  -->
                <ul id = "bannertop">
                    <li>
                        <div id = "uc-sig">
                            <span id = "uconn-signature"><a href = "http://www.uconn.edu/">UCONN</a></span>
                        </div>
                    </li>
                    <li>
                        <div id = "uc-sep">
                            <span id = "separator">|</span>
                        </div>
                    </li>
                    <li>
                        <div id = "uc-fn">
                            <span id = "uconn-fullname"><a href = "http://www.uconn.edu/">University of Connecticut</a></span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class = "large-4 column"  id = "search-index-box"><!-- search/index box -->
				<ul id = "iconsbox">
                    <li>
                        <div>
                            <a href = "http://www.uconn.edu/search/"><img src = "http://www.engr.uconn.edu/wp-content/themes/engineering/images/m-icons_0000_search-white.png" alt = "image icon" /></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href = "http://www.uconn.edu/az">A-Z</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- site title area with brand standard -->
    <div class = "long-row" id = "title-bar">
        <div class = "row" id = "title-box">
<?php if(is_active_sidebar("righttitlearea")): ?>
            <div class = "large-8 left"><!-- site title and partnership -->
<?php else: ?>
            <div class = "large-12 left"><!-- site title and partnership -->
<?php endif; ?>
<?php if(get_theme_mod("titleareaorg") && get_theme_mod("titlearealink")): ?>
                <h6>
                    <a href = "<?php print get_theme_mod("titlearealink") ?>"><?php print get_theme_mod("titleareaorg") ?></a>
                </h6>
<?php endif; ?>
                <h2>
					<span id = "site-name">
						<a href = "<?php bloginfo("url"); ?>"><?php bloginfo("name"); ?></a>
					</span>
                </h2>
            </div>
<?php if(is_active_sidebar("righttitlearea")):?>
            <div class = "large-4 right"><!-- site logo -->
                <?php dynamic_sidebar("righttitlearea"); ?>
            </div>
<?php endif; ?>
        </div>
    </div>
<?php if(has_nav_menu('topmenu')): ?>
    <!-- top menu area -->
	<div class = "long-row" id = "top-menu-bar">
        <div class = "row">
            <div class = "large-12 column right">
                <?php wp_nav_menu(array('theme_location' => 'topmenu', 'menu_id' => 'topmenubar')); ?>
            </div>
        </div>
    </div>
<?php endif; ?>
    <!-- main menu area -->
    <div class = "long-row" id = "main-menu-bar">
        <div class = "row">
            <div class = "large-10 column"><!-- main menu goes here -->
<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name"></li>
    <li class="toggle-topbar menu-icon right"><a href="#"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section"><?php if(has_nav_menu('mainmenu')): ?>
<?php

$options = array(
  'theme_location' => 'mainmenu',
  'container' => false,
  'depth' => 3,
  'menu_id' => 'mainmenu',
  'menu_class' => 'top-menu-class',
//  'items_wrap' => '<ul id="%1$s" class="left menu %2$s">%3$s</ul>',
  'walker' => new Top_Bar_Walker()
);

wp_nav_menu($options); 

?>
<?php else: ?>
<ul id = "mainmenu" class = "top-menu-class">
	<li><a href = "./">Home</a></li>
	<li><a href = "http://www.uconn.edu/">UConn Home</a></li>
	<li><a href = "http://lib.uconn.edu/">Homer Babbidge Library</a></li>
	<li><a href = "http://president.uconn.edu/">President's Website</a></li>
	<li><a href = "http://provost.uconn.edu/">Provost Website</a></li>
	<li><a href = "http://boardoftrustees.uconn.edu/">Board of Trustees</a></li>
</ul>
<?php endif; ?>
</nav>
            </div>
            <div class = "large-1 column"><!-- search box goes here -->
                
            </div>
        </div>
    </div>
    <!-- content area -->
    <div class = "long-row" id = "content-box">
        <div class = "row" id = "contentsection">
<!-- <?php print get_post_type(); ?>-->