<?php
/*
*****************************************************
* WEBMAN'S WORDPRESS THEME FRAMEWORK
* Created by WebMan - www.webmandesign.eu
*
* Staff custom post meta boxes
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
	if ( ! function_exists( 'wm_staff_meta_fields' ) ) {
		function wm_staff_meta_fields() {
			global $sidebarPosition;

			$skin            = ( ! wm_option( 'design-skin' ) ) ? ( 'default.css' ) : ( wm_option( 'design-skin' ) );
			$prefix          = 'staff-';
			$prefixBg        = 'background-';
			$prefixBgHeading = 'heading-background-';
			$fontFile        = ( ! file_exists( WM_FONT . 'custom/config.json' ) ) ? ( WM_FONT . 'fontello/config.json' ) : ( WM_FONT . 'custom/config.json' );
			$fontIcons       = wm_fontello_classes( $fontFile );

			//Get icons
			$icons = array();
			$icons[''] = __( '- select icon -', 'lespaul_domain_adm' );
			foreach ( $fontIcons as $icon ) {
				$icons[$icon] = ucwords( str_replace( '-', ' ', substr( $icon, 4 ) ) );
			}

			$widgetsButtons = ( current_user_can( 'switch_themes' ) ) ? ( '<a class="button confirm" href="' . get_admin_url() . 'widgets.php">' . __( 'Manage widget areas', 'lespaul_domain_adm' ) . '</a> <a class="button confirm" href="' . get_admin_url() . 'admin.php?page=' . WM_THEME_SHORTNAME . '-options">' . __( 'Create new widget areas', 'lespaul_domain_adm' ) . '</a>' ) : ( '' );

			$metaFields = array(

				//Position settings
				array(
					"type" => "section-open",
					"section-id" => "position",
					"title" => __( 'General', 'lespaul_domain_adm' )
				),
					array(
						"type" => "text",
						"id" => $prefix."position",
						"label" => __( 'Position', 'lespaul_domain_adm' ),
						"desc" => __( 'Staff member position', 'lespaul_domain_adm' )
					)
			);

			if ( wm_option( 'cp-staff-rich' ) )
				array_push( $metaFields,
					array(
						"type" => "checkbox",
						"id" => "staff-no-rich",
						"label" => __( 'Disable rich staff profile', 'lespaul_domain_adm' ),
						"desc" => __( 'Disables rich staff profile page for this staff member only (use theme admin panel to disable this globally).<br />Only excerpt content will be displayed in staff members list.', 'lespaul_domain_adm' )
					)
				);

			array_push( $metaFields,
				array(
					"type" => "section-close"
				),



				//Contacts settings
				array(
					"type" => "section-open",
					"section-id" => "contact",
					"title" => __( 'Contact', 'lespaul_domain_adm' )
				),
					array(
						"type" => "text",
						"id" => $prefix."phone",
						"label" => __( 'Phone', 'lespaul_domain_adm' ),
						"desc" => __( 'Phone number', 'lespaul_domain_adm' )
					),
					array(
						"type" => "text",
						"id" => $prefix."email",
						"label" => __( 'E-mail', 'lespaul_domain_adm' ),
						"desc" => __( 'E-mail (spam protection will be applied)', 'lespaul_domain_adm' )
					),
					array(
						"type" => "text",
						"id" => $prefix."linkedin",
						"label" => __( 'LinkedIn', 'lespaul_domain_adm' ),
						"desc" => __( 'LinkedIn account URL', 'lespaul_domain_adm' )
					),
					array(
						"type" => "text",
						"id" => $prefix."skype",
						"label" => __( 'Skype username', 'lespaul_domain_adm' ),
						"desc" => __( 'Skype username', 'lespaul_domain_adm' )
					),
					array(
						"type" => "additems",
						"id" => $prefix."custom-contacts",
						"label" => __( 'Custom contacts', 'lespaul_domain_adm' ),
						"desc" => __( 'Press [+] button to add new custom contact info', 'lespaul_domain_adm' ),
						"field" => "attributes-selectable",
						"options-attr" => $icons,
					),
				array(
					"type" => "section-close"
				)

			);

			if ( wm_option( 'cp-staff-rich' ) ) {
				array_push( $metaFields,
					//Sidebar settings
					array(
						"type" => "section-open",
						"section-id" => "sidebar-section",
						"title" => __( 'Sidebar', 'lespaul_domain_adm' )
					),
						array(
							"type" => "box",
							"content" => '<h4>' . __( 'Choose a sidebar and its position on the post/page', 'lespaul_domain_adm' ) . '</h4>' . $widgetsButtons,
						),

						array(
							"type" => "layouts",
							"id" => "layout",
							"label" => __( 'Sidebar position', 'lespaul_domain_adm' ),
							"desc" => __( 'Choose a sidebar position on the post/page (set the first one to use the theme default settings)', 'lespaul_domain_adm' ),
							"options" => $sidebarPosition,
							"default" => ""
						),
						array(
							"type" => "select",
							"id" => "sidebar",
							"label" => __( 'Choose a sidebar', 'lespaul_domain_adm' ),
							"desc" => __( 'Select a widget area used as a sidebar for this post/page (if not set, the dafault theme settings will apply)', 'lespaul_domain_adm' ),
							"options" => wm_widget_areas(),
							"default" => ""
						),
					array(
						"type" => "section-close"
					),



					//Design - website background settings
					array(
						"type" => "section-open",
						"section-id" => "background-settings",
						"title" => __( 'Backgrounds', 'lespaul_domain_adm' )
					),
						array(
							"type" => "heading4",
							"content" => __( 'Main heading area background', 'lespaul_domain_panel' )
						),
						array(
							"id" => $prefix."bg-heading",
							"type" => "inside-wrapper-open",
							"class" => "toggle box"
						),
							array(
								"type" => "slider",
								"id" => $prefixBgHeading."padding",
								"label" => __( 'Section padding', 'lespaul_domain_adm' ),
								"desc" => __( 'Top and bottom padding size applied on the section (leave zero for default)', 'lespaul_domain_adm' ),
								"default" => 0,
								"min" => 1,
								"max" => 100,
								"step" => 1,
								"validate" => "absint"
							),
							array(
								"type" => "color",
								"id" => $prefixBgHeading."color",
								"label" => __( 'Text color', 'lespaul_domain_adm' ),
								"desc" => __( 'Sets the custom main heading text color', 'lespaul_domain_adm' ),
								"default" => "",
								"validate" => "color"
							),
							array(
								"type" => "color",
								"id" => $prefixBgHeading."bg-color",
								"label" => __( 'Background color', 'lespaul_domain_adm' ),
								"desc" => __( 'Sets the custom main heading background color', 'lespaul_domain_adm' ),
								"default" => "",
								"validate" => "color"
							),
							array(
								"type" => "image",
								"id" => $prefixBgHeading."bg-img-url",
								"label" => __( 'Custom background image', 'lespaul_domain_adm' ),
								"desc" => __( 'To upload a new image, press the [+] button and use the Media Uploader as you would be adding an image into post', 'lespaul_domain_adm' ),
								"default" => "",
								"readonly" => true,
								"imgsize" => 'mobile'
							),
							array(
								"type" => "select",
								"id" => $prefixBgHeading."bg-img-position",
								"label" => __( 'Background image position', 'lespaul_domain_adm' ),
								"desc" => __( 'Set background image position', 'lespaul_domain_adm' ),
								"options" => array(
									'50% 50%'   => __( 'Center', 'lespaul_domain_adm' ),
									'50% 0'     => __( 'Center horizontally, top', 'lespaul_domain_adm' ),
									'50% 100%'  => __( 'Center horizontally, bottom', 'lespaul_domain_adm' ),
									'0 0'       => __( 'Left, top', 'lespaul_domain_adm' ),
									'0 50%'     => __( 'Left, center vertically', 'lespaul_domain_adm' ),
									'0 100%'    => __( 'Left, bottom', 'lespaul_domain_adm' ),
									'100% 0'    => __( 'Right, top', 'lespaul_domain_adm' ),
									'100% 50%'  => __( 'Right, center vertically', 'lespaul_domain_adm' ),
									'100% 100%' => __( 'Right, bottom', 'lespaul_domain_adm' ),
									),
								"default" => '50% 0'
							),
							array(
								"type" => "select",
								"id" => $prefixBgHeading."bg-img-repeat",
								"label" => __( 'Background image repeat', 'lespaul_domain_adm' ),
								"desc" => __( 'Set background image repeating', 'lespaul_domain_adm' ),
								"options" => array(
									'no-repeat' => __( 'Do not repeat', 'lespaul_domain_adm' ),
									'repeat'    => __( 'Repeat', 'lespaul_domain_adm' ),
									'repeat-x'  => __( 'Repeat horizontally', 'lespaul_domain_adm' ),
									'repeat-y'  => __( 'Repeat vertically', 'lespaul_domain_adm' )
									),
								"default" => 'no-repeat'
							),
						array(
							"id" => $prefix."bg-heading",
							"type" => "inside-wrapper-close"
						)
				);

				if ( 'fullwidth' == wm_option( 'general-boxed' ) ) {
					array_push( $metaFields,
						array(
							"type" => "section-close"
						)
					);
					return $metaFields;
				}

				array_push( $metaFields,

						array(
							"type" => "heading4",
							"content" => __( 'Page background', 'lespaul_domain_panel' )
						),
						array(
							"id" => $prefix."bg",
							"type" => "inside-wrapper-open",
							"class" => "toggle box"
						),
							array(
								"type" => "color",
								"id" => $prefixBg."bg-color",
								"label" => __( 'Background color', 'lespaul_domain_adm' ),
								"desc" => __( 'Sets the custom website background color.', 'lespaul_domain_adm' ) . '<br />' . __( 'Please always set this to reset any possible background styles applied on main HTML element.', 'lespaul_domain_adm' ),
								"default" => "",
								"validate" => "color"
							),
							array(
								"type" => "image",
								"id" => $prefixBg."bg-img-url",
								"label" => __( 'Custom background image', 'lespaul_domain_adm' ),
								"desc" => __( 'To upload a new image, press the [+] button and use the Media Uploader as you would be adding an image into post', 'lespaul_domain_adm' ),
								"default" => "",
								"readonly" => true,
								"imgsize" => 'mobile'
							),
							array(
								"type" => "select",
								"id" => $prefixBg."bg-img-position",
								"label" => __( 'Background image position', 'lespaul_domain_adm' ),
								"desc" => __( 'Set background image position', 'lespaul_domain_adm' ),
								"options" => array(
									'50% 50%'   => __( 'Center', 'lespaul_domain_adm' ),
									'50% 0'     => __( 'Center horizontally, top', 'lespaul_domain_adm' ),
									'50% 100%'  => __( 'Center horizontally, bottom', 'lespaul_domain_adm' ),
									'0 0'       => __( 'Left, top', 'lespaul_domain_adm' ),
									'0 50%'     => __( 'Left, center vertically', 'lespaul_domain_adm' ),
									'0 100%'    => __( 'Left, bottom', 'lespaul_domain_adm' ),
									'100% 0'    => __( 'Right, top', 'lespaul_domain_adm' ),
									'100% 50%'  => __( 'Right, center vertically', 'lespaul_domain_adm' ),
									'100% 100%' => __( 'Right, bottom', 'lespaul_domain_adm' ),
									),
								"default" => '50% 0'
							),
							array(
								"type" => "select",
								"id" => $prefixBg."bg-img-repeat",
								"label" => __( 'Background image repeat', 'lespaul_domain_adm' ),
								"desc" => __( 'Set background image repeating', 'lespaul_domain_adm' ),
								"options" => array(
									'no-repeat' => __( 'Do not repeat', 'lespaul_domain_adm' ),
									'repeat'    => __( 'Repeat', 'lespaul_domain_adm' ),
									'repeat-x'  => __( 'Repeat horizontally', 'lespaul_domain_adm' ),
									'repeat-y'  => __( 'Repeat vertically', 'lespaul_domain_adm' )
									),
								"default" => 'no-repeat'
							),
							array(
								"type" => "radio",
								"id" => $prefixBg."bg-img-attachment",
								"label" => __( 'Background image attachment', 'lespaul_domain_adm' ),
								"desc" => __( 'Set background image attachment', 'lespaul_domain_adm' ),
								"options" => array(
									'fixed'  => __( 'Fixed position', 'lespaul_domain_adm' ),
									'scroll' => __( 'Move on scrolling', 'lespaul_domain_adm' )
									),
								"default" => 'fixed'
							),
							array(
								"type" => "checkbox",
								"id" => $prefixBg."bg-img-fit-window",
								"label" => __( 'Fit browser window width', 'lespaul_domain_adm' ),
								"desc" => __( 'Makes the image to scale to browser window width. Note that background image position and repeat options does not apply when this is checked.', 'lespaul_domain_adm' ),
								"value" => "true"
							),
						array(
							"id" => $prefix."bg",
							"type" => "inside-wrapper-close"
						),
					array(
						"type" => "section-close"
					)

				);
			}

			return $metaFields;
		}
	} // /wm_staff_meta_fields





/*
*****************************************************
*      2) ADD META BOX
*****************************************************
*/
	/*
	* Generate metabox
	*/
	if ( ! function_exists( 'wm_staff_generate_metabox' ) ) {
		function wm_staff_generate_metabox() {
			$wm_staff_META = new WM_Meta_Box( array(
				//where the meta box appear: normal (default), advanced, side
				'context'  => 'normal',
				//meta fields setup array
				'fields'   => wm_staff_meta_fields(),
				//meta box id, unique per meta box
				'id'       => 'wm-metabox-wm_staff-meta',
				//post types
				'pages'    => array( 'wm_staff' ),
				//order of meta box: high (default), low
				'priority' => 'high',
				//tabbed meta box interface?
				'tabs'     => true,
				//meta box title
				'title'    => __( 'Staff info', 'lespaul_domain_adm' ),
			) );
		}
	} // /wm_staff_generate_metabox

	add_action( 'init', 'wm_staff_generate_metabox', 9999 ); //Has to be hooked to the end of init for taxonomies lists in metaboxes

?>