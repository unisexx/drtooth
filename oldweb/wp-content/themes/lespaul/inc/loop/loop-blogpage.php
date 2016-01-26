<?php
global $page, $paged, $blogLayout;

$thisPageId    = get_the_ID();
$listClasses   = $blogLayout = wm_meta_option( 'blog-layout', $thisPageId );
$articleColumn = ( ' masonry-container' === $listClasses ) ? ( wm_meta_option( 'blog-masonry-size', $thisPageId ) ) : ( '' );
$articleCount  = wm_meta_option( 'blog-posts-count', $thisPageId );
$catsAction    = ( wm_meta_option( 'blog-cats-action', $thisPageId ) ) ? ( wm_meta_option( 'blog-cats-action', $thisPageId ) ) : ( 'category__not_in' );
$cats          = ( wm_meta_option( 'blog-cats', $thisPageId ) ) ? ( array_filter( wm_meta_option( 'blog-cats', $thisPageId ) ) ) : ( array() );

if ( 0 < count( $cats ) ) {
	//category slugs to IDs
	$catTemp = array();

	foreach ( $cats as $cat ) {
		if ( ! is_numeric( $cat ) ) {
			$catObj    = get_category_by_slug( $cat );
			$catTemp[] = ( $catObj && isset( $catObj->term_id ) ) ? ( $catObj->term_id ) : ( null );
		} else {
			$catTemp[] = $cat;
		}
	}
	array_filter( $catTemp ); //remove empty (if any)

	$cats = $catTemp;

	//rearange array keys - makes { 1=>1, 3=>2, 5=>3 } into { 1=>1, 2=>2, 3=>3 }
	//$cats = implode( ',', $cats );
	//$cats = explode( ',', $cats );
}

if ( is_front_page() && isset( $page ) )
	$paginationPage = $page;
elseif ( isset( $paged ) )
	$paginationPage = $paged;
else
	$paginationPage = 0;

//Setting a WordPress query
$args = array(
	'posts_per_page' => absint( $articleCount ),
	'paged'          => absint( $paginationPage )
	);
if ( 0 < count( $cats ) )
	$args = $args + array( $catsAction => $cats );

$blogPosts = new WP_Query( $args );

if ( $blogPosts->have_posts() ) {
?>
	<?php do_action( 'wm_before_list' ); ?>

	<section id="list-articles" class="list-articles clearfix<?php echo $listClasses; ?>">

		<?php
		$addClass = '';
		$even     = '';

		while ( $blogPosts->have_posts() ) :

			$blogPosts->the_post();

			$format    = ( get_post_format() ) ? ( get_post_format() ) : ( 'standard' );
			$addClass .= ( is_sticky() ) ? ( ' sticky-post' ) : ( '' );
			$addClass .= ( $articleColumn ) ? ( ' column col-1' . $articleColumn ) : ( '' );
			$classes   = ( $even || $addClass ) ? ( ' class="' . $even . $addClass . '"' ) : ( '' );
			?>
			<article<?php echo $classes; ?>>

				<?php get_template_part( 'inc/formats/format', $format ); ?>

			</article>
			<?php
			$even = ( $even ) ? ( '' ) : ( 'even' );

		endwhile;
		?>

	</section> <!-- /list-articles -->

	<?php wm_pagination( $blogPosts ); ?>

<?php
} else {
	wm_not_found();
}
wp_reset_query();
?>