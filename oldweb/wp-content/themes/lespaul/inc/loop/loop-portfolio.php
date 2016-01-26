<?php if ( have_posts() ) : the_post(); ?>

<?php do_action( 'wm_before_post' ); ?>

<?php do_action( 'wm_start_post' ); ?>

<?php
global $paged;
if ( isset( $paged ) && 2 > $paged ) {
	$content = ( get_the_content() ) ? ( '<div class="article-content">' . apply_filters( 'the_content', get_the_content() ) . '</div>' ) : ( '' );
	echo $content;
}
?>

<?php
$category   = wm_meta_option( 'portfolio-category' ); //this may return slug, but the shortcode below will take care of it
$columns    = wm_meta_option( 'portfolio-columns' );
$count      = ( wm_meta_option( 'portfolio-count' ) ) ? ( wm_meta_option( 'portfolio-count' ) ) : ( -1 );
$filter     = wm_meta_option( 'portfolio-filter' );
$order      = wm_meta_option( 'portfolio-order' );
$pagination = wm_meta_option( 'portfolio-pagination' );

echo do_shortcode( '[projects category="' . $category . '" columns="' . $columns . '" count="' . $count . '" filter="' . $filter . '" order="' . $order . '" pagination="' . $pagination . '" /]' );
?>

<?php do_action( 'wm_end_post' ); ?>

<?php
wp_reset_query();
do_action( 'wm_after_post' );
endif;
?>