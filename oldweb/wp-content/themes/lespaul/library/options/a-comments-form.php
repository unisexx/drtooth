<?php
/*
*****************************************************
* WEBMAN'S WORDPRESS THEME FRAMEWORK
* Created by WebMan - www.webmandesign.eu
*
* Comments form options
*****************************************************
*/

$commenter = wp_get_current_commenter();
$req       = get_option( 'require_name_email' );
$aria_req  = ( $req ? " aria-required='true'" : '' );

//form fields:
$fields = array(
	'author' => '<p class="comment-form-author"><input id="author" name="author" type="text" class="text" value="' . esc_attr( $commenter[ 'comment_author' ] ) . '" size="22" tabindex="2"' . $aria_req . ' /> <label for="author" title="' . __( 'Name', 'lespaul_domain' ) . '">' . __( 'Name', 'lespaul_domain' ) . '</label></p>',
	'email'  => '<p class="comment-form-email"><input id="email" name="email" type="text" class="text" value="' . esc_attr( $commenter[ 'comment_author_email' ] ) . '" size="22" tabindex="3"' . $aria_req . ' /> <label for="email" title="' . __( 'Email', 'lespaul_domain' ) . '">' . __( 'Email', 'lespaul_domain' ) . '</label></p>',
	'url'    => '<p class="comment-form-url"><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> <label for="url" title="' . __( 'Website', 'lespaul_domain' ) . '">' . __( 'Website', 'lespaul_domain' ) . '</label></p>',
	);

//arguments to display comments form:
$commentFormArgs = array(
	'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
	'comment_field'        => '<p class="message"><textarea name="comment" id="comment" cols="40" rows="5" tabindex="1" aria-required="true"></textarea> <label for="comment" title="' . __( 'Comment', 'lespaul_domain' ) . '">' . __( 'Comment', 'lespaul_domain' ) . '</label></p>',
	'must_log_in'          => '<p class="login-required">' . __( 'You have to be logged in to leave a comment.', 'lespaul_domain' ) . ' <a href="' . wp_login_url( get_permalink() ) . '">' . __( 'Log in.', 'lespaul_domain' ) . '</a></p>',
	'logged_in_as'         => '<p class="login-status">' . sprintf( __( 'Logged in as %s', 'lespaul_domain' ), ' <a href="' . admin_url( 'profile.php' ) . '">' . $user_identity . '</a>' ) . ' | <a href="' . wp_logout_url( get_permalink() ) . '" title="' . __( 'Log out from your account', 'lespaul_domain' ) . '">' . __( 'Log out &raquo;', 'lespaul_domain' ) . '</a></p>',
	'comment_notes_before' => '',
	'comment_notes_after'  => '',
	'id_form'              => 'commentform',
	'id_submit'            => 'submit',
	'title_reply'          => '',
	'title_reply_to'       => __( 'Leave a reply for %s', 'lespaul_domain' ),
	'cancel_reply_link'    => __( 'Cancel comment', 'lespaul_domain' ),
	'label_submit'         => __( 'Post comment', 'lespaul_domain' ),
	);

?>