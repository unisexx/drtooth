<?php
/*
*****************************************************
* WEBMAN'S WORDPRESS THEME FRAMEWORK
* Created by WebMan - www.webmandesign.eu
*
* Post meta boxes generator
*
* CONTENT:
* - 1) Meta box form
* - 2) Add meta box
* - 3) Additions
*****************************************************
*/





/*
*****************************************************
*      1) META BOX FORM
*****************************************************
*/
	require_once( WM_META . 'a-meta-post.php' ); //Have to insert this to keep the localization impact minimal





/*
*****************************************************
*      2) ADD META BOX
*****************************************************
*/
	/*
	* Generate metabox
	*/
	if ( ! function_exists( 'wm_post_generate_metabox' ) ) {
		function wm_post_generate_metabox() {
			$wm_post_META = new WM_Meta_Box( array(
				//where the meta box appear: normal (default), advanced, side
				'context'  => 'normal',
				//meta fields setup array
				'fields'   => wm_meta_post_options(),
				//meta box id, unique per meta box
				'id'       => 'wm-metabox-post-meta',
				//post types
				'pages'    => array( 'post' ),
				//order of meta box: high (default), low
				'priority' => 'high',
				//tabbed meta box interface?
				'tabs'     => true,
				//meta box title
				'title'    => __( 'Post settings', 'lespaul_domain_adm' ),
			) );
		}
	} // /wm_post_generate_metabox

	add_action( 'init', 'wm_post_generate_metabox', 9999 ); //Has to be hooked to the end of init for taxonomies lists in metaboxes





/*
*****************************************************
*      3) ADDITIONS
*****************************************************
*/
	//ACTIONS
	if ( ! wm_check_wp_version( '3.6' ) )
		add_action( 'edit_form_after_title', 'wm_post_metabox_end', 1000 );
		//add_action( 'edit_form_after_editor', 'wm_post_metabox_end', 1 );



	/*
	* Meta form generator end
	*/
	if ( ! function_exists( 'wm_post_metabox_end' ) ) {
		function wm_post_metabox_end() {
			global $post;

			if ( 'post' != $post->post_type )
				return;

			$metaPostOptions = wm_meta_post_options_formats();

			echo '<div class="wm-wrap meta">';

			//Content
			wm_render_form( $metaPostOptions, 'meta' );

			echo '</div><!-- /wm-wrap -->';
		}
	} // /wm_post_metabox_end

?>