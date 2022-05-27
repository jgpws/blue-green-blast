<?php
if ( post_password_required() ) {
	echo '<p class="nocomments">' . __('This post is password protected. Enter the password to view comments.', 'blue-green-blast') . '</p>';
	return;
}

if ( have_comments() ) : ?>
<h4 id="comments">
<?php comments_number( __('No Comments', 'blue-green-blast'),
__('One Comment', 'blue-green-blast'),
__('% Comments', 'blue-green-blast') ); ?>
</h4>
<ul class="commentlist">
	<?php wp_list_comments() ?>
</ul>
<div class="navigation">
<div class="alignleft"><?php previous_comments_link(); ?></div>
<div class="alignright"><?php next_comments_link(); ?></div>
</div>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ( comments_open() ) :
		// If comments are open, but there are no comments.
	else : // comments are closed
	endif;
endif;

comment_id_fields();

// make this backwards compatible
if ( function_exists('comment_form') ) {
comment_form(); // 3.0 only
}
/* If not using 3.0+, the theme will default to the comment file used in the default theme, probably Kubrick. */
?>
