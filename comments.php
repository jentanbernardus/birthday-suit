<?php if(post_password_required()): ?>
<?php _e('This post is password protected. Enter the password to view any comments.', 'twentyten' ); ?>
<?php
/* Stop the rest of comments.php from being processed,
* but don't kill the script entirely -- we still have
* to fully load the template.
*/
return;
endif;
?>
<?php if(have_comments()): ?>
<h3 id="comments"><?php comments_number('','1 Comment','% Comments'); ?></h3>
<ol id="comments-list">
<?php wp_list_comments(array('style' => 'ol')); ?>
</ol>
<?php endif; // end have_comments() ?>
<?php 

	$fields =  array(
		'author' => '<p><input id="author" name="author" type="text" value="'.esc_attr($commenter['comment_author']).'" size="30"'.$aria_req.' />'.
					'<label for="author">'.__('Name').'</label>'.( $req ? ' <span class="required">// Required</span>' : '' ).'</p>',
	
		'email'  => '<p><input id="email" name="email" type="text" value="'.esc_attr($commenter['comment_author_email']).'" size="30"'.$aria_req.' />'.
					'<label for="email">'.__('Email').'</label>'.($req ? ' <span class="required">// Required not published</span>' : '').'</p>',
	
		'url'    => '<p><input id="url" name="url" type="text" value="'.esc_attr( $commenter['comment_author_url']).'" size="30" />'.
					'<label for="url">'.__('Website URL').'</label></p>',            
	);

	$required_text = sprintf( ' ' . __('Required fields are marked %s'), '<span class="required">*</span>' );

	$defaults = array(	'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
						'comment_field'        => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
						'must_log_in'          => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
						'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a> - <a href="%3$s" title="Log out of this account">Logout</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
						'comment_notes_before' => '',
						'comment_notes_after'  => '',
						'id_form'              => 'commentform',
						'id_submit'            => 'submit',
						'title_reply'          => __( 'Leave a Comment' ),
						'title_reply_to'       => __( 'Leave a Comment to %s' ),
						'cancel_reply_link'    => __( 'Cancel Comment' ),
						'label_submit'         => __( 'Post Comment' ),
					);

	$args = wp_parse_args($args, apply_filters('comment_form_defaults', $defaults));
	comment_form($defaults); 
?>