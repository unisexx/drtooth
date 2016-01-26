<?php
/*
*****************************************************
* WEBMAN'S WORDPRESS THEME FRAMEWORK
* Created by WebMan - www.webmandesign.eu
*
* Predefined widget areas
*****************************************************
*/

//Widget areas
$widgetAreas = array(

	array(
		'name'          => __( 'Default Sidebar', 'lespaul_domain_adm' ),
		'id'            => 'default',
		'description'   => '[widgets area="default" /] ' . __( 'The default sidebar widget area.', 'lespaul_domain_adm' ),
		'before_widget' => '<div class="widget %1$s %2$s">',
		'after_widget'  => '</div> <!-- /widget -->',
		'before_title'  => '<h3 class="widget-heading separator-heading"><span class="text-holder">',
		'after_title'   => '</span><span class="pattern-holder"></span></h3>'
	),

	array(
		'name'          => __( 'Top Bar Widgets', 'lespaul_domain_adm' ),
		'id'            => 'top-bar-widgets',
		'description'   => __( 'Flexible layout, maximum 2 widgets. Recommended widgets are Custom menu, Text or Search.', 'lespaul_domain_adm' ),
		'before_widget' => '<div class="widget %1$s %2$s">',
		'after_widget'  => '</div> <!-- /widget -->',
		'before_title'  => '<h3 class="widget-heading">',
		'after_title'   => '</h3>'
	),

	array(
		'name'          => __( 'Above Footer Widgets', 'lespaul_domain_adm' ),
		'id'            => 'above-footer-widgets',
		'description'   => __( 'Flexible layout, maximum 5 widgets.', 'lespaul_domain_adm' ),
		'before_widget' => '<div class="widget %1$s %2$s">',
		'after_widget'  => '</div> <!-- /widget -->',
		'before_title'  => '<h3 class="widget-heading separator-heading"><span class="text-holder">',
		'after_title'   => '</span><span class="pattern-holder"></span></h3>'
	),

	array(
		'name'          => __( 'Footer Widgets', 'lespaul_domain_adm' ),
		'id'            => 'footer-widgets',
		'description'   => __( 'Flexible layout, maximum 5 widgets.', 'lespaul_domain_adm' ),
		'before_widget' => '<div class="widget %1$s %2$s">',
		'after_widget'  => '</div> <!-- /widget -->',
		'before_title'  => '<h3 class="widget-heading separator-heading"><span class="text-holder">',
		'after_title'   => '</span><span class="pattern-holder"></span></h3>'
	)

);

if ( wm_option( 'access-client-area' ) )
	array_push( $widgetAreas, array(
		'name'          => __( 'Clients Area Access Denied', 'lespaul_domain_adm' ),
		'id'            => 'access-denied',
		'description'   => __( 'Flexible layout, maximum 5 widgets.', 'lespaul_domain_adm' ),
		'before_widget' => '<div class="widget %1$s %2$s">',
		'after_widget'  => '</div> <!-- /widget -->',
		'before_title'  => '<h3 class="widget-heading separator-heading"><span class="text-holder">',
		'after_title'   => '</span><span class="pattern-holder"></span></h3>'
	) );

if ( class_exists( 'Woocommerce' ) )
	array_push( $widgetAreas,
		array(
			'name'          => __( 'WooCommerce General', 'lespaul_domain_adm' ),
			'id'            => 'woocommerce',
			'description'   => __( 'Sidebar on WooCommerce pages. Leave empty for no sidebar on the pages (fullwidth layout).', 'lespaul_domain_adm' ),
			'before_widget' => '<div class="widget %1$s %2$s">',
			'after_widget'  => '</div> <!-- /widget -->',
			'before_title'  => '<h3 class="widget-heading separator-heading"><span class="text-holder">',
			'after_title'   => '</span><span class="pattern-holder"></span></h3>'
		),

		array(
			'name'          => __( 'WooCommerce Product', 'lespaul_domain_adm' ),
			'id'            => 'woocommerce-product',
			'description'   => __( 'Sidebar on WooCommerce single product page. Leave empty for no sidebar on the page (fullwidth layout).', 'lespaul_domain_adm' ),
			'before_widget' => '<div class="widget %1$s %2$s">',
			'after_widget'  => '</div> <!-- /widget -->',
			'before_title'  => '<h3 class="widget-heading separator-heading"><span class="text-holder">',
			'after_title'   => '</span><span class="pattern-holder"></span></h3>'
		)
	);

?>