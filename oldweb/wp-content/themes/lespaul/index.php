<?php
get_header();

$postId               = ( is_archive() && get_option( 'page_for_posts' ) ) ? ( get_option( 'page_for_posts' ) ) : ( null );
$sidebarLayoutDefault = ( wm_option( 'contents-sidebar-position' ) ) ? ( esc_attr( wm_option( 'contents-sidebar-position' ) ) ) : ( WM_SIDEBAR_DEFAULT_POSITION );
$sidebarLayout        = ( wm_meta_option( 'layout', $postId ) ) ? ( wm_meta_option( 'layout', $postId ) ) : ( $sidebarLayoutDefault );
$overrideSidebar      = ( wm_meta_option( 'sidebar', $postId ) && -1 != wm_meta_option( 'sidebar', $postId ) ) ? ( wm_meta_option( 'sidebar', $postId ) ) : ( WM_SIDEBAR_FALLBACK );

if ( is_active_sidebar( $overrideSidebar ) && 'none' != $sidebarLayout ) {
	$sidebarPanes = ( wm_option( 'contents-sidebar-width' ) ) ? ( esc_attr( wm_option( 'contents-sidebar-width' ) ) ) : ( WM_SIDEBAR_WIDTH );
	$sidebarPanes = ( 2 == count( explode( ';', $sidebarPanes ) ) ) ? ( explode( ';', $sidebarPanes ) ) : ( explode( ';', WM_SIDEBAR_WIDTH ) );

	if ( 'left' == $sidebarLayout )
		$sidebarPanes[1] .= ' sidebar-left';
} else {
	$sidebarPanes = array( '', ' twelve pane' );
}

if ( is_archive() && wm_option( 'blog-archive-no-sidebar' ) )
	$sidebarPanes[1] = ' twelve pane';
?>
<div class="wrap-inner">

<section class="main<?php echo $sidebarPanes[1]; ?>">

	<?php do_action( 'wm_start_main_content' ); ?>

	<?php
	$catDesc = category_description();
	if ( ! empty( $catDesc ) )
		echo '<div class="cat-desc">' . apply_filters( 'the_content', category_description() ) . '</div>';
	?>

	<?php get_template_part( 'inc/loop/loop', 'index' ); ?>

</section> <!-- /main -->

<?php
if ( ' twelve pane' !== $sidebarPanes[1] ) {
	$class = 'sidebar clearfix sidebar-' . $sidebarLayout . $sidebarPanes[0];
	wm_sidebar( WM_SIDEBAR_FALLBACK, $class );
}
?>

</div> <!-- /wrap-inner -->
<?php get_footer(); ?>