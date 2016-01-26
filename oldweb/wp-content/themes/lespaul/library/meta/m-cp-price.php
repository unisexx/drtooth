<?php
/*
*****************************************************
* WEBMAN'S WORDPRESS THEME FRAMEWORK
* Created by WebMan - www.webmandesign.eu
*
* Prices custom post meta boxes
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
	if ( ! function_exists( 'wm_price_meta_fields' ) ) {
		function wm_price_meta_fields() {
			$prefix   = 'price-';

			$metaFields = array(

				//General settings
				array(
					"type" => "section-open",
					"section-id" => "general-settings",
					"title" => __( 'Price set up', 'lespaul_domain_adm' )
				),
					array(
						"type" => "text",
						"id" => $prefix."cost",
						"label" => __( 'Price cost (including currency)', 'lespaul_domain_adm' ),
						"desc" => __( 'The actual price cost displayed including currency', 'lespaul_domain_adm' )
					),
					array(
						"type" => "text",
						"id" => $prefix."note",
						"label" => __( 'Note text', 'lespaul_domain_adm' ),
						"desc" => __( 'Additional note displayed below price cost', 'lespaul_domain_adm' )
					),
					array(
						"type" => "hr"
					),
					array(
						"type" => "text",
						"id" => $prefix."order",
						"label" => __( 'Price column order', 'lespaul_domain_adm' ),
						"desc" => __( 'Set a number to order price columns in price table. Higher number will move the column further to the right in the price table.<br />Leave empty or set to 0 (zero) to keep the default ordering (by date created).', 'lespaul_domain_adm' ),
						"size" => 3,
						"maxlength" => 3,
						"validate" => "absint"
					),
				array(
					"type" => "section-close"
				),



				//Button
				array(
					"type" => "section-open",
					"section-id" => "button-settings",
					"title" => __( 'Button set up', 'lespaul_domain_adm' )
				),
					array(
						"type" => "text",
						"id" => $prefix."btn-text",
						"label" => __( 'Button text', 'lespaul_domain_adm' ),
						"desc" => __( 'Price button text', 'lespaul_domain_adm' ),
						"default" => ""
					),
					array(
						"type" => "text",
						"id" => $prefix."btn-url",
						"label" => __( 'Button link', 'lespaul_domain_adm' ),
						"desc" => __( 'Price button URL link', 'lespaul_domain_adm' ),
						"default" => ""
					),
					array(
						"type" => "select",
						"id" => $prefix."btn-color",
						"label" => __( 'Button color', 'lespaul_domain_adm' ),
						"desc" => __( 'Choose style of the button', 'lespaul_domain_adm' ),
						"options" => array(
							''       => __( 'Link color button (default)', 'lespaul_domain_adm' ),
							'gray'   => __( 'Gray button', 'lespaul_domain_adm' ),
							'green'  => __( 'Green button', 'lespaul_domain_adm' ),
							'blue'   => __( 'Blue button', 'lespaul_domain_adm' ),
							'orange' => __( 'Orange button', 'lespaul_domain_adm' ),
							'red'    => __( 'Red button', 'lespaul_domain_adm' ),
							),
						"default" => ""
					),
				array(
					"type" => "section-close"
				),



				//Styling
				array(
					"type" => "section-open",
					"section-id" => "styling-settings",
					"title" => __( 'Styling', 'lespaul_domain_adm' )
				),
					array(
						"type" => "radio",
						"id" => $prefix."style",
						"label" => __( 'Column style', 'lespaul_domain_adm' ),
						"desc" => __( 'Select, how this column should be styles', 'lespaul_domain_adm' ),
						"options" => array(
							''          => __( 'Price column', 'lespaul_domain_adm' ),
							' featured' => __( 'Featured price column', 'lespaul_domain_adm' ),
							' legend'   => __( 'Legend', 'lespaul_domain_adm' ),
							),
					),
					array(
						"type" => "space"
					),
					array(
						"type" => "color",
						"id" => $prefix."color",
						"label" => __( 'Custom column color', 'lespaul_domain_adm' ),
						"desc" => __( 'Sets the custom price column background color', 'lespaul_domain_adm' ),
						"default" => "",
						"validate" => "color"
					),
				array(
					"type" => "section-close"
				),

			);

			return $metaFields;
		}
	} // /wm_price_meta_fields





/*
*****************************************************
*      2) ADD META BOX
*****************************************************
*/
	/*
	* Generate metabox
	*/
	if ( ! function_exists( 'wm_price_generate_metabox' ) ) {
		function wm_price_generate_metabox() {
			$wm_price_META = new WM_Meta_Box( array(
				//where the meta box appear: normal (default), advanced, side
				'context'  => 'normal',
				//meta fields setup array
				'fields'   => wm_price_meta_fields(),
				//meta box id, unique per meta box
				'id'       => 'wm-metabox-wm_price-meta',
				//post types
				'pages'    => array( 'wm_price' ),
				//order of meta box: high (default), low
				'priority' => 'high',
				//tabbed meta box interface?
				'tabs'     => true,
				//meta box title
				'title'    => __( 'Price settings', 'lespaul_domain_adm' ),
			) );
		}
	} // /wm_price_generate_metabox

	add_action( 'init', 'wm_price_generate_metabox', 9999 ); //Has to be hooked to the end of init for taxonomies lists in metaboxes

?>