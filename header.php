<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes('xhtml'); ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>" />
<!-- our main stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php //wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); //for javascript pop up reply form ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<!-- opens wrapper div -->
<div id="wrapper">


<!-- opens header div -->
<div id="header">

<div id="left"><!-- opens left div -->
<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
<p><?php bloginfo('description'); ?></p>
</div><!-- closes left div -->

<!-- opens sidebar-2 div -->
<div id="sidebar-2">
<ul>
<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar(2) ) : ?>
<li><form method="get" id="searchform" action="<?php echo home_url('/'); ?>" >
<div><label class="screen-reader-text" for="s"></label>
<input type="text" value="Enter Your Query" name="s" id="s" onfocus="if (this.value == 'Enter Your Query') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter Your Query';}" /><input type="image" name="s" src="<?php echo get_template_directory_uri(); ?>/images/mag_glass.gif" />
</div>
</form></li>
</ul>
<?php endif; ?>
</div>
<!-- closes sidebar-2 div -->

</div> 
<!-- closes header div -->