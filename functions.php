<?php
/* for theme localization */
load_theme_textdomain('blue-green-blast', get_template_directory_uri() . '/languages'  );

//widget friendly sidebar
if ( function_exists('register_sidebar') )
    register_sidebars(2);

//max content width in post pages
if ( ! isset( $content_width ) ) $content_width = 429;

//WP 2.9 and below compatible comments form
add_filter('comments_template', 'legacy_comments');
function legacy_comments($file) {
	if( !function_exists('comment_form') ) {
		$file = TEMPLATEPATH . '/legacy.comments.php';
		return $file;
	}
}

//automatic feed links
if ( function_exists('add_theme_support') ) {
add_theme_support( 'automatic-feed-links' );
}

//backward compatible feed links for WP 2.9 and below
//see see http://clark-technet.com/2010/05/wordpress-theme-developers-tip-automatic-feed-links-in-3-0
//this function does not pass Theme Check but is required for backward compatibility
function remove_feed_link() {
	global $wp_version;
	$default_feed_link = '<link rel="alternate" type="application/rss+xml" title="'. get_bloginfo('name'). ' RSS 2.0 Feed" href="'. get_bloginfo('rss2_url') .'" />' . "\n" . '<link rel="alternate" type="text/xml" title='. get_bloginfo('name'). ' RSS 0.92 Feed" href="'. get_bloginfo('rss_url') .'" />' . "\n";
	if($wp_version < 3){
		if(function_exists(automatic_feed_links)) {
			$output .= automatic_feed_links();
		} else {
			$output .= $default_feed_link;
		}
	}
	echo $output;
}
add_action('wp_head', 'remove_feed_link');

//remove WP version generator
remove_action('wp_head', 'wp_generator');
?>
<?php 
//adsense placeholder functions and shortcodes
//see readme_install.txt on how to use the placeholder images
function show250left() {
return '<div class="ad250-floatleft"><img src="' . get_template_directory_uri() . '/images/ad_placeholder250.png" alt="Adsense 250 placeholder" /></div>';
}
add_shortcode('ad250-floatleft', 'show250left');

function show250right() {
return '<div class="ad250-floatright"><img src="' . get_template_directory_uri() . '/images/ad_placeholder250.png" alt="Adsense 250 placeholder" /></div>';
}
add_shortcode('ad250-floatright', 'show250right');

function show125buttonleft() {
return '<div class="ad125button-floatleft"><img src="' . get_template_directory_uri() . '/images/ad_placeholder125.png" alt="Adsense 125 button placeholder" /></div>';
}
add_shortcode('ad125button-floatleft', 'show125buttonleft');

function show125buttonright() {
return '<div class="ad125button-floatright"><img src="' . get_template_directory_uri() . '/images/ad_placeholder125.png" alt="Adsense 125 button placeholder" /></div>';
}
add_shortcode('ad125button-floatright', 'show125buttonright');

//To use the following in the sidebar, everything between the two
//div tags must be placed in a text widget. This can be found in the
//Admin panel under Appearance > Widgets > Text.
//Copy <div id="ad120tower...</div> into the text box and Save
//Also, you must upload the placeholder120.png image
//to your WordPress Media folder. Instructions are found in readme_install.txt.
//Use the function version for blog posts and pages.
function show120tower() {
return '<div id="ad120tower"><img src="" /></div>';
}

add_shortcode('ad120tower', 'show120tower');
?>