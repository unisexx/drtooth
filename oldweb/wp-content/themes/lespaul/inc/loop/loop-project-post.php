<?php if ( have_posts() ) : the_post(); ?>

<?php do_action( 'wm_before_post' ); ?>

<?php do_action( 'wm_start_post' ); ?>

<?php
echo '<div class="article-content">';
	the_content();
echo '</div>';
?>

<?php do_action( 'wm_end_post' ); ?>

<?php
wp_reset_query();
do_action( 'wm_after_post' );
endif;
?>

<?php comments_template( null, true ); ?>