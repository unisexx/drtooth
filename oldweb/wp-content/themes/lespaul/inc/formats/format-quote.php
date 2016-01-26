<div <?php post_class( 'article-content' ); ?>>
	<?php
	$content = get_the_content();

	//remove <blockquote> tags
	$content = preg_replace( '/<(\/?)blockquote(.*?)>/', '', $content );

	//quote source
	$sourceName = trim( get_post_meta( get_the_ID(), '_format_quote_source_name', true ) );
	$sourceURL  = trim( get_post_meta( get_the_ID(), '_format_quote_source_url', true ) );
	if ( false == stristr( $content, '<cite' ) && $sourceName ) {
		if ( $sourceURL )
			$sourceName = '<a href="' . esc_url( $sourceURL ) . '" target="_blank">' . $sourceName . '</a>';
		$content .= '<cite class="quote-source">' . $sourceName . '</cite>';
	}

	//split where <cite> tag begins
	$content = explode( '<cite', $content );

	echo '<blockquote>' . apply_filters( 'wm_default_content_filters', $content[0] ) . '</blockquote>';
	if ( isset( $content[1] ) && $content[1] )
		echo '<cite' . $content[1];
	?>
</div>

<?php
wm_meta();

if ( is_single() )
	wm_meta( array( 'tags' ), 'meta-bottom' );
?>