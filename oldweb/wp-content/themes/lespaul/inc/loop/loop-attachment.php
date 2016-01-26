<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="attachment">
		<?php
		if ( wp_attachment_is_image() ) {
		//display image
			$linkFullImg = wp_get_attachment_link( $post->ID, array( 940, 9999 ), false, false );
			$link        = preg_replace( '/(width|height)=\"\d*\"\s/', "", $linkFullImg );
			echo $link;
		} else {
		//or display download link
			?>
			<ul class="download"><li><a href="<?php echo wp_get_attachment_url(); ?>" title="<?php the_title_attribute(); ?>"><?php echo basename( $post->guid ); ?></a></li></ul>
			<?php
		}
		?>
	</div>

	<footer class="meta-article">
		<span class="meta-item"><?php
			printf( __( 'Published on %s', 'lespaul_domain' ),
				sprintf( '<time title="%1$s">%2$s</time>',
					esc_attr( get_the_time() ),
					get_the_date()
				)
			);
		?></span>
		<?php
		if ( wp_attachment_is_image() ) {
			echo '<span class="meta-item">';
			$metadata = wp_get_attachment_metadata();
			$metadata['width'] = ( isset( $metadata['width'] ) && $metadata['width'] ) ? ( $metadata['width'] ) : ( '?' );
			$metadata['height'] = ( isset( $metadata['height'] ) && $metadata['height'] ) ? ( $metadata['height'] ) : ( '?' );
			printf( __( 'Full size of %s pixels', 'lespaul_domain' ),
				sprintf( '<a href="%1$s" title="%2$s">%3$s &times; %4$s</a>',
					wp_get_attachment_url(),
					esc_attr( __( 'Link to full-size image', 'lespaul_domain' ) ),
					$metadata['width'],
					$metadata['height']
				)
			);
			echo '</span>';
		}
		?>
	</footer>

	<?php
	//attachment caption and description texts
	if ( ! empty( $post->post_excerpt ) || ! empty( $post->post_content ) ) {
		$excerpt  = ( $post->post_excerpt ) ? ( '<h2>' . strip_tags( $post->post_excerpt ) . '</h2>' ) : ( '' );
		$excerpt .= $post->post_content;
		echo apply_filters( 'wm_default_content_filters', $excerpt );
	}
	?>

	<?php comments_template( null, true ); ?>

<?php endwhile; endif; ?>
