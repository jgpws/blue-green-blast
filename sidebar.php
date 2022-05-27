<!-- opens sidebar div -->
<div id="sidebar">

<ul><!-- opens sidebar ul -->
	<li><h2 class="widgettitle"><?php _e('Subscribe', 'blue-green-blast'); ?></h2>
		<ul>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/feed-icon-14x14.png" alt="Feed Icon" class="feedicon" /><a href="<?php bloginfo('rss_url'); ?>" title="<?php _e('Syndicate this site using RSS', 'blue-green-blast'); ?>"> <abbr title="<?php _e('Really Simple Syndication' , 'blue-green-blast') ?>">RSS 0.92</abbr></a>
			</li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/feed-icon-14x14.png" alt="Feed Icon" class="feedicon" /><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS', 'blue-green-blast'); ?>"> <abbr title="<?php _e('Really Simple Syndication', 'blue-green-blast'); ?>">RSS 2.0</abbr></a>
			</li>
		</ul>
	</li>
<!-- begins widgetized section -->
<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar() ) : ?>
	<?php wp_list_pages('depth=3&title_li=<h2 class="widgettitle">' . __('Pages', 'blue-green-blast') . '</h2>'); ?>
	<?php wp_list_categories('depth=3&title_li=<h2 class="widgettitle">' . __('Categories', 'blue-green-blast') . '</h2>'); ?>
	<li class="archives"><h2 class="widgettitle"><?php _e('Archives', 'blue-green-blast'); ?></h2>
		<ul>
		<?php wp_get_archives(); ?>
		</ul>
	</li>
<?php endif; ?>
<!-- ends widgetized section -->
	<li class="log-in-out"><h2 class="widgettitle"><?php _e('My Account', 'blue-green-blast'); ?></h2>
		<ul>
		<?php if(is_user_logged_in()){
echo '<li><span class="login-message">' . __('Welcome registered user:', 'blue-green-blast') . '</span></li>'; 
			wp_register('<li>',' (Edit Site)</li>');} ?>
			<li><a href="<?php echo esc_url( wp_login_url( $_SERVER['REQUEST_URI'] ) ); ?>" title="Login"><?php _e('Login', 'blue-green-blast') ?></a></li>
			<li><a href="<?php echo esc_url( wp_logout_url( $_SERVER['REQUEST_URI'] ) ); ?>" title="Logout"><?php _e('Logout', 'blue-green-blast') ?></a></li>
		</ul>
	</li>
</ul><!-- closes sidebar ul -->

</div>
<!-- closes sidebar div -->