<div <?php post_class( 'article-content' ); ?>>
	<?php
	$customURL = get_post_meta( get_the_ID(), '_format_link_url', true );
	if ( $customURL )
		echo '<p><a href="' . esc_url( $customURL ) . '" target="_blank">' . get_the_title() . '</a></p>';

	echo apply_filters( 'wm_default_content_filters', get_the_content() );
	?>
</div>

<?php
wm_meta();

if ( is_single() )
	wm_meta( array( 'tags' ), 'meta-bottom' );
?>