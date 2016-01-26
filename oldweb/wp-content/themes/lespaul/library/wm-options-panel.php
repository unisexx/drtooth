<?php
/*
*****************************************************
* WEBMAN'S WORDPRESS THEME FRAMEWORK
* Created by WebMan - www.webmandesign.eu
*
* WebMan Options Panel
* version 1.3
*
* CONTENT:
* - 1) Required files
* - 2) Actions and filters
* - 3) Styles and scripts inclusion
* - 4) Theme (un)installation
* - 5) Adding admin page and saving data
* - 6) Theme options form generator
* - 7) Other functions
*****************************************************
*/





/*
*****************************************************
*      1) REQUIRED FILES
*****************************************************
*/
	//Load the options (the same order as the main tabs are)
	require_once( WM_OPTIONS . 'a-quickstart.php' );
	require_once( WM_OPTIONS . 'a-general.php' );
	require_once( WM_OPTIONS . 'a-branding.php' );
	require_once( WM_OPTIONS . 'a-blog.php' );
	require_once( WM_OPTIONS . 'a-custom-posts.php' );
	require_once( WM_OPTIONS . 'a-tracking.php' );
	require_once( WM_OPTIONS . 'a-header.php' );
	require_once( WM_OPTIONS . 'a-content.php' );
	require_once( WM_OPTIONS . 'a-footer.php' );
	require_once( WM_OPTIONS . 'a-widgets.php' );
	require_once( WM_OPTIONS . 'a-design.php' );
	require_once( WM_OPTIONS . 'a-404.php' );
	require_once( WM_OPTIONS . 'a-client-area.php' );
	require_once( WM_OPTIONS . 'a-security.php' );
	require_once( WM_OPTIONS . 'a-export.php' );





/*
*****************************************************
*      2) ACTIONS AND FILTERS
*****************************************************
*/
	//ACTIONS
		//Theme installation
		add_action( 'after_setup_theme', 'wm_install' );
		//Admin panel assets
		add_action( 'admin_enqueue_scripts', 'wm_options_panel_include' );
		//Menu registration
		add_action( 'admin_menu', 'wm_theme_options' );
		//AJAX
		//add_action( 'wp_ajax_wm-saving-options', 'wm_process_AJAX' ); /* CAN'T APPLY AJAX DUE TO QUICKSTART GUIDE AND FLUSH REWRITE */
		//Flush rewrites
		add_action( 'wp_loaded', 'wm_flush_rewrite' );





/*
*****************************************************
*      3) STYLES AND SCRIPTS INCLUSION
*****************************************************
*/
	/*
	* Admin panel assets
	*/
	if ( ! function_exists( 'wm_options_panel_include' ) ) {
		function wm_options_panel_include() {
			global $current_screen;

			if (
					'appearance_page_' . WM_THEME_SHORTNAME . '-options' == $current_screen->id ||
					'appearance_page_' . WM_THEME_SHORTNAME . '-import' == $current_screen->id
				) {
				//styles
					wp_enqueue_style( 'fancybox' );
					wp_enqueue_style( 'wm-options-panel-white-label' );
					if ( ! wm_option( 'branding-panel-logo' ) && ! wm_option( 'branding-panel-no-logo' ) )
						wp_enqueue_style( 'wm-options-panel-branded' );
					wp_enqueue_style( 'color-picker' );
					wp_enqueue_style( 'thickbox' );

				//scripts
					wp_enqueue_script( 'jquery-cookies' );
					wp_enqueue_script( 'fancybox' );
					wp_enqueue_script( 'wm-options-panel-tabs' );
					wp_enqueue_script( 'wm-options-panel' );
					wp_enqueue_script( 'color-picker' );
					wp_enqueue_script( 'jquery-ui-core' );
					wp_enqueue_script( 'jquery-ui-slider' );
					wp_enqueue_script( 'jquery-ui-sortable' );
					wp_enqueue_script( 'media-upload' );
					wp_enqueue_script( 'thickbox' );

					//AJAX
					//wp_enqueue_script( 'wm-options-panel-AJAX' );
			}
		}
	} // /wm_options_panel_include





/*
*****************************************************
*      4) THEME (UN)INSTALLATION
*****************************************************
*/
	/*
	* Theme installation
	*/
	if ( ! function_exists( 'wm_install' ) ) {
		function wm_install() {
			$themeStatus = get_option( WM_THEME_SETTINGS . '-installed' );

			if ( ! $themeStatus ) {
				update_option( WM_THEME_SETTINGS . '-installed', 1 );

				//Static settings
				require_once( WM_OPTIONS . 'a-wmstatic.php' );
				$saveStaticOptions = array();
				foreach ( $staticOptions as $value ) {
					$saveStaticOptions[ $value['id'] ] = $value['default'];
				}
				update_option( WM_THEME_SETTINGS_STATIC, $saveStaticOptions );

				//flush_rewrite_rules();

				$shortname = WM_THEME_SHORTNAME;
				header( "Location: themes.php?page=$shortname-options" );
				die;
			}
		}
	} // /wm_install



	/*
	* Theme uninstallation
	*/
	if ( ! function_exists( 'wm_uninstall' ) ) {
		function wm_uninstall() {
			delete_option( WM_THEME_SETTINGS . '-installed' );
			delete_option( WM_THEME_SETTINGS );

			update_option( 'template', 'default' );
			update_option( 'stylesheet', 'default' );

			delete_option( 'current_theme' );

			$theme = wp_get_theme(); //WP 3.4+ only

			do_action( 'switch_theme', $theme );
		}
	} // /wm_uninstall





/*
*****************************************************
*      5) ADDING ADMIN PAGE AND SAVING DATA
*****************************************************
*/
	/*
	* Adding WordPress admin menu item
	*/
	if ( ! function_exists( 'wm_theme_options' ) ) {
		function wm_theme_options() {
			//Check that the user is allowed to edit options
			if ( ! current_user_can( 'switch_themes' ) )
				wp_die( __( 'You do not have sufficient permissions to access this page.', 'lespaul_domain_adm' ) );

			//Saving fields from theme options form
			if ( isset( $_GET['page'] ) && WM_THEME_SHORTNAME . '-options' == $_GET['page'] )
				wm_theme_save_options();

			//Adding admin menu item under "Appearance" menu
			//add_theme_page( $page_title, $menu_title, $capability, $menu_slug, $function); //use "themes.php" in redirect
			add_theme_page(
					//page_title
					__( 'Theme Options', 'lespaul_domain_panel' ),
					//menu_title
					__( 'Theme Options', 'lespaul_domain_panel' ),
					//capability
					'switch_themes',
					//menu_slug
					WM_THEME_SHORTNAME . '-options',
					//function
					'wm_theme_options_page'
				);
			add_theme_page(
					//page_title
					__( 'Options Export/Import', 'lespaul_domain_panel' ),
					//menu_title
					__( 'Options Export/Import', 'lespaul_domain_panel' ),
					//capability
					'switch_themes',
					//menu_slug
					WM_THEME_SHORTNAME . '-import',
					//function
					'wm_theme_options_page'
				);
		}
	} // /wm_theme_options



	/*
	* Saving options
	*/
	if ( ! function_exists( 'wm_theme_save_options' ) ) {
		function wm_theme_save_options( $ajax = false ) {
			global $options, $blog_id;

			if ( isset( $_POST['save-preset'] ) || ( isset( $_POST[ WM_THEME_SETTINGS_PREFIX . 'export-skin-name'] ) && $_POST[ WM_THEME_SETTINGS_PREFIX . 'export-skin-name'] ) ) {
			//Save preset file

				//Check security (nonce field)
				check_admin_referer( 'wm-theme-options-form' );

				if ( $_POST[ WM_THEME_SETTINGS_PREFIX . 'export-skin-name'] )
					wm_create_new_skin( $_POST[ WM_THEME_SETTINGS_PREFIX . 'export-skin-name'] );
				else
					wm_save_options_preset();

				if ( ! $ajax ) {
					wp_safe_redirect( admin_url( 'themes.php?page=' . WM_THEME_SHORTNAME . '-import&saved=true' ) );
					die();
				}

			} elseif ( isset( $_POST['action'] ) && 'wm-saving-options' == isset( $_POST['action'] ) ) {
			//Saving

				//Check security (nonce field)
				check_admin_referer( 'wm-theme-options-form' );

				$newOptions = array();

				if ( ! isset( $_POST[ WM_THEME_SETTINGS_PREFIX . 'settingsExporter'] ) && ! isset( $_POST[ WM_THEME_SETTINGS_PREFIX . 'settingsExporter-preset'] ) ) {
				//Normal options saving

					foreach ( $options as $value ) {
						if ( isset( $value['id'] ) ) {
							$valId = WM_THEME_SETTINGS_PREFIX . $value['id'];

							if ( isset( $_POST[$valId] ) && $value['id'] ) {

								if ( is_array( $_POST[$valId] ) ) {

									$updValue = $_POST[$valId];
									if ( isset( $value['image'] ) && $value['image'] && ( ! isset( $updValue['url'] ) || ! $updValue['url'] ) )
										$updValue = '';
									//rearange array keys - makes { 1=>1, 3=>2, 5=>3 } into { 1=>1, 2=>2, 3=>3 }
									//$updValue = array_values( $updValue );
									if ( ! ( isset( $updValue[0] ) && is_array( $updValue[0] ) ) ) {
										$updValue = array_filter( $updValue, 'strlen' ); //removes null array items
										$updValue = array_filter( $updValue, 'wm_remove_negative_array' ); //removes '-1' array items
										if ( ! isset( $value['duplicate'] ) )
											$updValue = array_unique( $updValue ); //removes duplicates from array
									}

								} else {

									if ( isset( $value['validate'] ) && 'url' == $value['validate'] ) {
										$updValue = preg_replace( '/\s+/', '', $_POST[$valId] ); //remove spaces
										$updValue = esc_url( $updValue );
									} elseif ( isset( $value['validate'] ) && 'absint' == $value['validate'] ) {
										$updValue = absint( $_POST[$valId] );
									} elseif ( isset( $value['validate'] ) && 'int' == $value['validate'] ) {
										$updValue = intval( $_POST[$valId] );
									} elseif ( isset( $value['validate'] ) && 'color' == $value['validate'] ) {
										$updValue = ereg_replace( '[^a-f0-9]', '', sanitize_title( $_POST[$valId] ) ); //remove non-alfanumeric characters
										$updValue = ( 6 === strlen( $updValue ) ) ? ( strtolower( $updValue ) ) : ( '' );
									} else {
										$updValue = stripslashes( $_POST[$valId] );
									}

								}

								$newOptions[$valId] = $updValue;

							} elseif ( $value['id'] ) {

								if ( isset( $value['default'] ) && $value['default'] && 'checkbox' != $value['type'] )
									$newOptions[$valId] = $value['default'];
								else
									$newOptions[$valId] = '';

							}
						}
					} // /foreach

				} else {
				//Importing settings

					if ( isset( $_POST[ WM_THEME_SETTINGS_PREFIX . 'settingsExporter-preset'] ) && $_POST[ WM_THEME_SETTINGS_PREFIX . 'settingsExporter-preset'] ) {
						$filaPath = WM_PRESETS . trim( $_POST[ WM_THEME_SETTINGS_PREFIX . 'settingsExporter-preset'] );
						//We don't need to write to the file, so just open for reading.
						$fp = fopen( $filaPath, 'r' );
						//Pull only the first 8kiB of the file in.
						$newOptions = addslashes( fread( $fp, filesize( $filaPath ) ) );
					} else {
						$newOptions = $_POST[ WM_THEME_SETTINGS_PREFIX . 'settingsExporter'];
					}

					//decoding new imported options JSON string and converting object to array
					if ( ! empty( $newOptions ) )
						$newOptions = json_decode( stripslashes( trim( $newOptions ) ), true );

				}

				if ( ! empty( $newOptions ) )
					update_option( WM_THEME_SETTINGS, $newOptions );

				//theme installed status update not to display the intro message again
				if ( 2 != get_option( WM_THEME_SETTINGS . '-installed' ) )
					update_option( WM_THEME_SETTINGS . '-installed', 2 );

				if ( ! $ajax ) {
					wp_safe_redirect( admin_url( 'themes.php?page=' . WM_THEME_SHORTNAME . '-options&saved=true' ) );
					die();
				}

			}
		}
	} // /wm_theme_save_options



	/*
	* AJAX processing
	*/
	if ( ! function_exists( 'wm_process_AJAX' ) ) {
		function wm_process_AJAX() {

			//Security - check nonce field
				if (
						! current_user_can( 'switch_themes' ) ||
						! isset( $_POST['_wpnonce'] ) ||
						! wp_verify_nonce( $_POST['_wpnonce'], 'wm-theme-options-form' )
					) {
					_e( 'You do not have permissions to do this!', 'lespaul_domain_panel' );
					die();
				}

			wm_theme_save_options( true );

			 _e( 'Settings were updated successfully.', 'lespaul_domain_panel' );

			die();
		}
	} // /wm_process_AJAX





/*
*****************************************************
*      6) THEME OPTIONS FORM GENERATOR
*****************************************************
*/
	/*
	* Admin panel page generator
	*/
	if ( ! function_exists( 'wm_theme_options_page' ) ) {
		function wm_theme_options_page() {
			global $options, $options_ei, $wp_version, $current_user;

			$import = '';

			if ( WM_THEME_SHORTNAME . '-import' === $_GET['page'] ) {
				$options = $options_ei;
				$import  = '-import';
			}

			$wp_version_class = substr( str_replace( '.', '', $wp_version ), 0, 2 );

			//Theme options page
			?>
		<div class="wm-wrap wm-options-panel wp-<?php echo $wp_version_class; ?> <?php echo $current_user->admin_color; if ( is_rtl() && wm_option( 'general-admin-ltr' ) ) echo ' force-ltr'; ?>">
			<?php
			//Status messages
				$msg       = array();
				$delayLong = '';

				if ( $wp_version < WM_WP_COMPATIBILITY ) {
					$msg[]     = __( 'THIS THEME IS NOT COMPATIBLE WITH YOUR WORDPRESS VERSION. PLEASE UPGRADE YOUR WORDPRESS INSTALLATION.', 'lespaul_domain_panel' );
					$delayLong = ' class="delay-long warning"';
				}
				if ( isset( $_GET['saved'] ) && ! empty( $_GET['saved'] ) && $_GET['saved'] )
					$msg[] = __( 'Settings were updated successfully.', 'lespaul_domain_panel' );
				if ( isset( $_GET['reset'] ) && ! empty( $_GET['reset'] ) && $_GET['reset'] )
					$msg[] = __( 'Settings were reset.', 'lespaul_domain_panel' );

				//Display message box if any message sent
				if ( ! empty( $msg ) ) {
					$msgOut = '<div id="message"' . $delayLong . ' class="wm-message"><p>';
					$msgOut .=  implode( '<br /><br />', $msg );
					$msgOut .= '</p></div>';
					echo $msgOut;
				}
			?>

			<!-- SIDE PANEL -->
			<div id="nav">
				<!-- Logo -->
				<?php
				$whiteLabel       = ( wm_option( 'branding-panel-logo' ) || wm_option( 'branding-panel-no-logo' ) ) ? ( 'white-label/' ) : ( 'default/' );
				$panelLogoURL     = ( wm_option( 'branding-panel-logo' ) || wm_option( 'branding-panel-no-logo' ) ) ? ( '#' ) : ( 'http://www.webmandesign.eu' );

				if ( wm_option( 'branding-panel-logo' ) && ! wm_option( 'branding-panel-no-logo' ) )
					$panelLogoImage = '<img src="' . esc_url( wm_option( 'branding-panel-logo' ) ) . '" alt="" />';
				elseif ( wm_option( 'branding-panel-no-logo' ) )
					$panelLogoImage = '';
				else
					$panelLogoImage = '<img src="' . WM_ASSETS_ADMIN . 'img/logo-webman-adminpanel.png" alt="WebMan Design" />';

				echo '<a href="' . $panelLogoURL . '" title="WebMan Design" class="logo">' . $panelLogoImage . '</a>';
				?>

				<!-- Main tabs -->
				<ul class="tabs">
					<?php
					if ( is_array( $options ) ) {
						$i = 0;
						foreach ( $options as $value ) {
							if ( 'section-open' == $value['type'] ) {
								++$i;
								$out = '<li class="item-' . $i . ' ' . $value['section-id'] . '"><a href="#set-' . $value['section-id'] . '">';
								$out .= '<span class="icon"><img src="' . WM_ASSETS_ADMIN . 'img/icons/' . $whiteLabel . 'ico-settings-' . $value['section-id'] . '.png" alt="" /></span>';
								$out .= '<strong>' . $value['title'] . '</strong>';
								$out .= '</a></li>';
								echo $out;
							}
						}
					}
					?>
				</ul> <!-- /tabs -->
			</div> <!-- /nav -->


			<!-- CONTENT -->
			<form id="wm-theme-options<?php echo $import; ?>-form" class="content no-js" method="post" action="<?php echo admin_url( 'themes.php?page=' . WM_THEME_SHORTNAME . '-options' ); ?>">

				<!-- HEADER -->
				<h2>
					<?php
					$panelTitle = WM_THEME_NAME . ' ' . WM_THEME_VERSION;

					if ( wm_option( 'branding-panel-logo' ) || wm_option( 'branding-panel-no-logo' ) )
						$panelTitle = '';
					if ( ! wm_option( 'branding-panel-no-logo' ) && strpos( wm_option( 'branding-panel-logo' ), 'logo-' . WM_THEME_SHORTNAME . '-admin.png' ) )
						$panelTitle = sprintf( '<small>' . __( 'Using %1$s theme, version %2$s', 'lespaul_domain_panel' ) . '</small>', WM_THEME_NAME, WM_THEME_VERSION );

					echo $panelTitle;
					?>
					<input name="primary-submit" type="submit" value="<?php _e( 'Save', 'lespaul_domain_panel' ) ?>" class="btn submit" id="primary-submit" />
				</h2>

				<!-- MAIN CONTENT -->
				<fieldset id="main">
					<?php wm_render_form( $options ); ?>
				</fieldset> <!-- /main -->

				<!-- FOOTER -->
				<div id="wrap-footer">
					<p>&copy; WebMan | Version 4.0<br /><a href="http://support.webmandesign.eu" target="_blank">WebMan Support</a></p>
					<?php wp_nonce_field( 'wm-theme-options-form' ); ?>
					<input type="hidden" name="action" value="wm-saving-options" />
				</div> <!-- /footer -->

			</form> <!-- /content -->

		</div> <!-- /wm-wrap -->
			<?php
		}
	} // /wm_theme_options_page





/*
*****************************************************
*      7) OTHER FUNCTIONS
*****************************************************
*/
	/*
	* Rewrite flush when saving due to permalinks settings
	*/
	if ( ! function_exists( 'wm_flush_rewrite' ) ) {
		function wm_flush_rewrite() {
			if (
					current_user_can( 'switch_themes' )
					&& isset( $_GET['page'] ) && ! empty( $_GET['page'] )
					&& WM_THEME_SHORTNAME . '-options' === $_GET['page']
					&& isset( $_GET['saved'] ) && ! empty( $_GET['saved'] )
					&& 'true' === $_GET['saved']
				) {
				global $wp_rewrite;
				$wp_rewrite->flush_rules();
			}
		}
	} // /wm_flush_rewrite



	/*
	* Create options preset file
	*/
	if ( ! function_exists( 'wm_save_options_preset' ) ) {
		function wm_save_options_preset( $fileType = '.json' ) {
			$content    = stripslashes( $_POST[ WM_THEME_SETTINGS_PREFIX . 'settingsExporter-export'] );
			$presetName = WM_THEME_SHORTNAME . '-' . date( 'YmdHis' ) . $fileType;

			if ( $content )
				file_put_contents( WM_PRESETS . $presetName, $content, LOCK_EX );
		}
	} // /wm_save_options_preset



	/*
	* Create skin files
	*/
	if ( ! function_exists( 'wm_create_new_skin' ) ) {
		function wm_create_new_skin( $fileName = '' ) {
			$fileName = trim( $fileName );

			if ( ! $fileName || 'default' == $fileName )
				return;

			//JSON file contents
				$skinArray   = get_option( WM_THEME_SETTINGS_SKIN );
				$JSONcontent = $separator = '';
				if ( ! empty( $skinArray ) && is_array( $skinArray ) ) {
					foreach ( $skinArray as $key => $value ) {
						$JSONcontent .= $separator . '"' . $key . '" : "' . $value . '"';
						$separator    = ",\r\n\t\t";
					}
				}
				if ( ! $JSONcontent )
					return;

				$JSONcontent  = '{' . "\r\n\t" . '"skin" : "' . strtoupper( $fileName ) . '",' . "\r\n\t" . '"options" : {' . "\r\n\t\t" . $JSONcontent . "\r\n\t" . '}' . "\r\n" . '}';

			//CSS file contents
				$CSScontent   = "/*\r\nPackage: " . WM_THEME_NAME . "\r\nSkin: " . strtoupper( $fileName ) . "\r\nDescription: Custom skin.\r\n*/";

			//create files
				file_put_contents( WM_SKINS . sanitize_title( $fileName ) . '.json', $JSONcontent, LOCK_EX );
				file_put_contents( WM_SKINS . sanitize_title( $fileName ) . '.css', $CSScontent, LOCK_EX );
		}
	} // /wm_create_new_skin

?>