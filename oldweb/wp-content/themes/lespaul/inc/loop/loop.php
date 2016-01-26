<?php
wp_reset_query();

global $blogLayout;

$blogPageId    = get_option( 'page_for_posts' );
$listClasses   = $blogLayout = ( is_archive() || is_home() ) ? ( wm_meta_option( 'blog-layout', $blogPageId ) ) : ( '' );
$articleColumn = ( ( is_archive() || is_home() ) && ' masonry-container' === $listClasses ) ? ( wm_meta_option( 'blog-masonry-size', $blogPageId ) ) : ( '' );

if ( have_posts() ) {
?>
	<?php do_action( 'wm_before_list' ); ?>

	<section id="list-articles" class="list-articles clearfix<?php echo $listClasses; ?>">

		<?php
		$addClass = '';
		$even     = '';

		while ( have_posts() ) :

			the_post();

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

	<?php do_action( 'wm_after_list' ); ?>

<?php
} else {
	wm_not_found();
}
wp_reset_query();
?>