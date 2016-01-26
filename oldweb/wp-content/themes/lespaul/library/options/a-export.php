<?php
/*
*****************************************************
* WEBMAN'S WORDPRESS THEME FRAMEWORK
* Created by WebMan - www.webmandesign.eu
*
* WebMan Options Panel - Export / import
*****************************************************
*/

$prefix = 'export-';

array_push( $options_ei,

array(
	"type" => "section-open",
	"section-id" => "export",
	"title" => __( 'Export / import', 'lespaul_domain_panel' )
),

	array(
		"type" => "sub-tabs",
		"parent-section-id" => "export",
		"list" => array(
			__( 'Export / import', 'lespaul_domain_panel' )
			)
	),

	array(
		"type" => "sub-section-open",
		"sub-section-id" => "export-1",
		"title" => __( 'Export / import', 'lespaul_domain_panel' )
	),
		array(
			"type" => "heading3",
			"content" => __( 'Theme settings export / import', 'lespaul_domain_panel' ),
			"class" => "first"
		),
		array(
			"type" => "settingsExporterJSON",
			"id" => "settingsExporter",
			"label-export" => __( 'Export', 'lespaul_domain_panel' ),
			"desc-export" => sprintf( __( 'To export the current settings copy and keep (save to external file) the settings string from the textarea below or click the "Create a file" button to save the settings in a new theme options file inside a <code>%s/option-presets/</code> folder.', 'lespaul_domain_panel' ), WM_THEME_SHORTNAME ),
			"label-import" => __( 'Import', 'lespaul_domain_panel' ),
			"desc-import" => __( 'To import previously saved settings, insert the settings string into textarea below or choose one of preset files (if exist) from the dropdown and save changes. Note that by importing new settings you will loose all current ones. Always keep the backup of current settings.', 'lespaul_domain_panel' )
		),
		array(
			"type" => "hrtop"
		),
	array(
		"type" => "sub-section-close"
	),

array(
	"type" => "section-close"
)

);

?>