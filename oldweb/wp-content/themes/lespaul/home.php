<?php
/*
Template Name: Blog
*/

get_header();
?>
<div class="wrap-inner">

<?php
$postId               = ( is_home() ) ? ( get_option( 'page_for_posts' ) ) : ( null );
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
?>

<section class="main clearfix<?php echo $sidebarPanes[1]; ?>">

	<?php do_action( 'wm_start_main_content' ); ?>

	<?php
	//Blog page content
	if ( isset( $paged ) && 2 > $paged && get_post( $postId ) ) {
		$blogPage = get_post( $postId );
		$content  = $blogPage->post_content;
		$content  = apply_filters( 'the_content', $content );
		$content  = str_replace( ']]>', ']]&gt;', $content );

		if ( is_home() && ! $postId )
			$content = null;

		if ( $content ) {
			echo '<div class="article-content">' . $content . '</div>';
			do_action( 'wm_after_post' );
		}
	}
	?>

	<!-- BLOG ENTRIES -->
	<?php
	//Blog posts list
	$loopType = ( is_page_template( 'home.php' ) && ! is_home() ) ? ( 'blogpage' ) : ( 'index' );
	get_template_part( 'inc/loop/loop', $loopType );
	?>

</section> <!-- /main -->

<?php
if ( 'none' != $sidebarLayout ) {
	$class = 'sidebar clearfix sidebar-' . $sidebarLayout . $sidebarPanes[0];

	wm_sidebar( $overrideSidebar, $class );
}
?>

</div> <!-- /wrap-inner -->
<?php get_footer(); ?>