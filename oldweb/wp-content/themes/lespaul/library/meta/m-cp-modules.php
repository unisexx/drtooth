<?php
/*
*****************************************************
* WEBMAN'S WORDPRESS THEME FRAMEWORK
* Created by WebMan - www.webmandesign.eu
*
* Content Module custom post meta boxes
*
* CONTENT:
* - 1) Meta box form
* - 2) Add meta box
*****************************************************
*/





/*
*****************************************************
*      1) META BOX FORM
*****************************************************
*/
	/*
	* Meta box form fields
	*/
	if ( ! function_exists( 'wm_modules_meta_fields' ) ) {
		function wm_modules_meta_fields() {
			global $post, $sidebarPosition, $projectLayouts;

			$prefix = 'module-';
			$postId = ( $post ) ? ( $post->ID ) : ( null );

			if ( ! $postId && isset( $_GET['post'] ) )
				$postId = absint( $_GET['post'] );

			//Get icons
			$fontFile      = ( ! file_exists( WM_FONT . 'custom/config.json' ) ) ? ( WM_FONT . 'fontello/config.json' ) : ( WM_FONT . 'custom/config.json' );
			$fontIcons     = wm_fontello_classes( $fontFile );
			$menuIcons     = array();
			$menuIcons[''] = __( '- select icon -', 'lespaul_domain_adm' );
			foreach ( $fontIcons as $icon ) {
				$menuIcons[$icon] = ucwords( str_replace( '-', ' ', substr( $icon, 4 ) ) );
			}

			$metaFields = array(

				//General settings
				array(
					"type" => "section-open",
					"section-id" => "general",
					"title" => __( 'Icon', 'lespaul_domain_adm' )
				),
					array(
						"type" => "text",
						"id" => $prefix."link",
						"label" => __( 'Custom link', 'lespaul_domain_adm' ),
						"desc" => __( 'If set, the link will be applied on featured image and module title', 'lespaul_domain_adm' ),
						"validate" => "url"
					),
					array(
						"type" => "checkbox",
						"id" => $prefix."type",
						"label" => __( 'Icon box', 'lespaul_domain_adm' ),
						"desc" => __( 'Style this module as icon box', 'lespaul_domain_adm' ),
						"value" => "icon"
					),
					array(
						"id" => "icon-box-settings",
						"type" => "inside-wrapper-open"
					),
						array(
							"type" => "space"
						),
						array(
							"type" => "box",
							"content" => '<h4>' . __( 'Set the predefined icon below or upload your custom one as featured image', 'lespaul_domain_adm' ) . '</h4><p>' . __( 'Predefined icons are high DPI / Retina display ready.', 'lespaul_domain_adm' ) . '</p><p>' . __( 'If you upload a custom icon, note that icon dimensions should be 32&times;32 px (24&times;24 if custom icon background set) in default layout, or 64&times;64 px (48&times;48 if custom icon background set) in centered icon box display layout. For high DPI / Retina displays double the size of the icon (it will be automatically scaled down).', 'lespaul_domain_adm' ) . '<br /><a class="button thickbox button-set-featured-image" href="' . get_admin_url() . 'media-upload.php?post_id=' . $postId . '&type=image&TB_iframe=1">' . __( 'Set featured image', 'lespaul_domain_adm' ) . '</a>' . '</p>' . __( 'Layout can be set in shortcode or in widget parameters when displaying the Content Module.', 'lespaul_domain_adm' ),
						),
						array(
							"type" => "select",
							"id" => $prefix."font-icon",
							"label" => __( 'Predefined icon', 'lespaul_domain_adm' ),
							"desc" => __( 'Select an icon to display with this icon module (the icons are ready for high DPI / Retina displays). This icon will be prioritized over icon uploaded as featured image.', 'lespaul_domain_adm' ),
							"options" => $menuIcons,
							"icons" => true
						),
						array(
							"type" => "color",
							"id" => $prefix."icon-box-color",
							"label" => __( 'Custom icon background', 'lespaul_domain_adm' ),
							"desc" => __( 'Leave empty for no background color', 'lespaul_domain_adm' ),
							"default" => "",
							"validate" => "color"
						),
					array(
						"conditional" => array(
							"field" => WM_THEME_SETTINGS_PREFIX . $prefix . "type",
							"custom" => array( "input", "name", "checkbox" ),
							"value" => "icon"
							),
						"id" => "icon-box-settings",
						"type" => "inside-wrapper-close"
					),

				array(
					"type" => "section-close"
				)

			);

			return $metaFields;
		}
	} // /wm_modules_meta_fields





/*
*****************************************************
*      2) ADD META BOX
*****************************************************
*/
	/*
	* Generate metabox
	*/
	if ( ! function_exists( 'wm_modules_generate_metabox' ) ) {
		function wm_modules_generate_metabox() {
			$wm_modules_META = new WM_Meta_Box( array(
				//where the meta box appear: normal (default), advanced, side
				'context'  => 'normal',
				//meta fields setup array
				'fields'   => wm_modules_meta_fields(),
				//meta box id, unique per meta box
				'id'       => 'wm-metabox-wm_modules-meta',
				//post types
				'pages'    => array( 'wm_modules' ),
				//order of meta box: high (default), low
				'priority' => 'high',
				//tabbed meta box interface?
				'tabs'     => true,
				//meta box title
				'title'    => __( 'Module settings', 'lespaul_domain_adm' ),
			) );
		}
	} // /wm_modules_generate_metabox

	add_action( 'init', 'wm_modules_generate_metabox', 9999 ); //Has to be hooked to the end of init for taxonomies lists in metaboxes

?>