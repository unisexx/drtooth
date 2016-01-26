<?php
/*
*****************************************************
* WEBMAN'S WORDPRESS THEME FRAMEWORK
* Created by WebMan - www.webmandesign.eu
*
* Staff custom post
*
* CONTENT:
* - 1) Actions and filters
* - 2) Creating a custom post
* - 3) Admin messages
* - 4) Custom post list in admin
* - 5) Meta boxes
*****************************************************
*/





/*
*****************************************************
*      1) ACTIONS AND FILTERS
*****************************************************
*/
	//ACTIONS
		//Registering CP
		add_action( 'init', 'wm_staff_cp_init' );
		//CP list table columns
		add_action( 'manage_wm_staff_posts_custom_column', 'wm_staff_cp_custom_column' );

	//FILTERS
		//CP list table columns
		add_filter( 'manage_edit-wm_staff_columns', 'wm_staff_cp_columns' );
		//Return messages
		add_filter( 'post_updated_messages', 'wm_staff_cp_messages' );





/*
*****************************************************
*      2) CREATING A CUSTOM POST
*****************************************************
*/
	/*
	* Custom post registration
	*/
	if ( ! function_exists( 'wm_staff_cp_init' ) ) {
		function wm_staff_cp_init() {
			global $cpMenuPosition;

			$role     = ( wm_option( 'cp-role-staff' ) ) ? ( wm_option( 'cp-role-staff' ) ) : ( 'page' );
			$slug     = ( wm_option( 'cp-permalink-staff' ) ) ? ( wm_option( 'cp-permalink-staff' ) ) : ( 'staff' );
			$supports = array( 'title', 'editor', 'thumbnail', 'author' );

			if ( wm_option( 'cp-staff-rich' ) )
				$supports[] = 'excerpt';
			if ( wm_option( 'cp-staff-revisions' ) )
				$supports[] = 'revisions';

			$args = array(
				'query_var'           => 'staff',
				'capability_type'     => $role,
				'public'              => true,
				'show_in_nav_menus'   => false,
				'show_ui'             => true,
				'exclude_from_search' => true,
				'hierarchical'        => false,
				'rewrite'             => array( 'slug' => $slug ),
				'menu_position'       => $cpMenuPosition['staff'],
				'menu_icon'           => WM_ASSETS_ADMIN . 'img/icons/custom-posts/ico-team.png',
				'supports'            => $supports,
				'labels'              => array(
					'name'               => __( 'Staff', 'lespaul_domain_adm' ),
					'singular_name'      => __( 'Staff member', 'lespaul_domain_adm' ),
					'add_new'            => __( 'Add new member', 'lespaul_domain_adm' ),
					'add_new_item'       => __( 'Add new member', 'lespaul_domain_adm' ),
					'new_item'           => __( 'Add new member', 'lespaul_domain_adm' ),
					'edit_item'          => __( 'Edit member', 'lespaul_domain_adm' ),
					'view_item'          => __( 'View member', 'lespaul_domain_adm' ),
					'search_items'       => __( 'Search members', 'lespaul_domain_adm' ),
					'not_found'          => __( 'No member found', 'lespaul_domain_adm' ),
					'not_found_in_trash' => __( 'No members found in trash', 'lespaul_domain_adm' ),
					'parent_item_colon'  => ''
				)
			);
			register_post_type( 'wm_staff' , $args );
		}
	} // /wm_staff_cp_init





/*
*****************************************************
*      3) ADMIN MESSAGES
*****************************************************
*/
	/*
	* Custom post admin area messages
	*
	* $messages = ARRAY [array of messages]
	*/
	if ( ! function_exists( 'wm_staff_cp_messages' ) ) {
		function wm_staff_cp_messages( $messages ) {
			global $post, $post_ID;

			$messages['wm_staff'] = array(
				0  => '', // Unused. Messages start at index 1.
				1  => __( 'Updated.', 'lespaul_domain_adm' ),
				2  => __( 'Custom field updated.', 'lespaul_domain_adm' ),
				3  => __( 'Custom field deleted.', 'lespaul_domain_adm' ),
				4  => __( 'Updated.', 'lespaul_domain_adm' ),
				5  => ( isset( $_GET['revision'] ) ) ? ( sprintf(
					__( 'Restored to revision from %s', 'lespaul_domain_adm' ),
						wp_post_revision_title( (int) $_GET['revision'], false )
					) ) : ( false ),
				6  => __( 'Published.', 'lespaul_domain_adm' ),
				7  => __( 'Saved.', 'lespaul_domain_adm' ),
				8  => __( 'Submitted.', 'lespaul_domain_adm' ),
				9  => sprintf(
					__( 'Scheduled for: <strong>%s</strong>.', 'lespaul_domain_adm' ),
						get_the_date() . ', ' . get_the_time()
					),
				10 => __( 'Draft updated.', 'lespaul_domain_adm' ),
				);

			return $messages;
		}
	} // /wm_staff_cp_messages





/*
*****************************************************
*      4) CUSTOM POST LIST IN ADMIN
*****************************************************
*/
	/*
	* Registration of the table columns
	*
	* $Cols = ARRAY [array of columns]
	*/
	if ( ! function_exists( 'wm_staff_cp_columns' ) ) {
		function wm_staff_cp_columns( $wm_staffCols ) {
			$prefix = 'wm_staff-';

			$wm_staffCols = array(
				//standard columns
				"cb"                   => '<input type="checkbox" />',
				$prefix . "thumb"      => __( 'Photo', 'lespaul_domain_adm' ),
				"title"                => __( 'Name', 'lespaul_domain_adm' ),
				$prefix . "position"   => __( 'Position', 'lespaul_domain_adm' ),
				$prefix . "department" => __( 'Department', 'lespaul_domain_adm' ),
				"date"                 => __( 'Date', 'lespaul_domain_adm' ),
				"author"               => __( 'Created by', 'lespaul_domain_adm' )
			);

			return $wm_staffCols;
		}
	} // /wm_staff_cp_columns

	/*
	* Outputting values for the custom columns in the table
	*
	* $Col = TEXT [column id for switch]
	*/
	if ( ! function_exists( 'wm_staff_cp_custom_column' ) ) {
		function wm_staff_cp_custom_column( $wm_staffCol ) {
			global $post;
			$prefix = 'wm_staff-';

			switch ( $wm_staffCol ) {
				case $prefix . "position":

					echo '<strong>' . strip_tags( wm_meta_option( 'staff-position' ) ) . '</strong>';

				break;
				case $prefix . "department":

					$terms = get_the_terms( $post->ID , 'department' );

					if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) {
						$out = $separator = '';

						foreach ( $terms as $term ) {
							$out .= $separator . $term->name;
							$separator = ', ';
						}

						echo $out;
					}

				break;
				case $prefix . "thumb":

					$size = explode( 'x', WM_ADMIN_LIST_THUMB );
					$image = ( has_post_thumbnail() ) ? ( get_the_post_thumbnail( null, 'widget' ) ) : ( '' );

					$hasThumb = ( $image ) ? ( ' has-thumb' ) : ( ' no-thumb' );

					echo '<span class="wm-image-container' . $hasThumb . '">';

					if ( get_edit_post_link() )
						edit_post_link( $image );
					else
						echo '<a href="' . get_permalink() . '">' . $image . '</a>';

					echo '</span>';

				break;
				default:
				break;
			}
		}
	} // /wm_staff_cp_custom_column





/*
*****************************************************
*      5) META BOXES
*****************************************************
*/
	if ( is_admin() )
		require_once( WM_META . 'm-cp-staff.php' );

?>