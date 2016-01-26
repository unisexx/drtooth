<?php
/*
*****************************************************
* WEBMAN'S WORDPRESS THEME FRAMEWORK
* Created by WebMan - www.webmandesign.eu
*
* Sub navigation
*****************************************************
*/

/*
*****************************************************
*      ACTIONS AND FILTERS
*****************************************************
*/
add_action( 'widgets_init', 'reg_wm_subpages' );



/*
* Widget registration
*/
function reg_wm_subpages() {
	register_widget( 'wm_subpages' );
} // /reg_wm_contact_info





/*
*****************************************************
*      WIDGET CLASS
*****************************************************
*/
class wm_subpages extends WP_Widget {
	/*
	*****************************************************
	*      widget constructor
	*****************************************************
	*/
	function __construct() {
		$id     = 'wm-sub-pages';
		$prefix = ( wm_option( 'branding-panel-no-logo' ) || ! strpos( wm_option( 'branding-panel-logo' ), 'logo-' . WM_THEME_SHORTNAME . '-admin.png' ) ) ? ( '' ) : ( WM_THEME_NAME . ' ' );
		$name   = '<span>' . $prefix . __( 'Submenu', 'lespaul_domain_adm' ) . '</span>';
		$widget_ops = array(
			'classname'   => 'wm-sub-pages',
			'description' => __( 'List of subpages (submenu)', 'lespaul_domain_adm' )
			);
		$control_ops = array();

		//$this->WP_Widget( $id, $name, $widget_ops, $control_ops );
		parent::__construct( $id, $name, $widget_ops, $control_ops );
	} // /__construct



	/*
	*****************************************************
	*      widget options form in admin
	*****************************************************
	*/
	function form( $instance ) {
		extract( $instance );
		$title  = ( isset( $title ) ) ? ( $title ) : ( null );
		$parent = ( isset( $parent ) ) ? ( $parent ) : ( null );
		$order  = ( isset( $order ) ) ? ( $order ) : ( null );

		//HTML to display widget settings form
		?>
		<p class="wm-desc"><?php _e( 'Displays a hierarchical list of subpages and siblings pages for the current page (page submenu).', 'lespaul_domain_adm' ) ?></p>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'lespaul_domain_adm' ) ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
			<small><?php _e( 'If you leave blank, the main parent page title will be displayed.', 'lespaul_domain_adm' ) ?></small>
		</p>

		<p>
			<input id="<?php echo $this->get_field_id( 'parent' ); ?>" name="<?php echo $this->get_field_name( 'parent' ); ?>" type="checkbox" <?php checked( $parent, 'on' ); ?>/>
			<label for="<?php echo $this->get_field_id( 'parent' ); ?>"><?php _e( 'Direct parent and children only', 'lespaul_domain_adm' ); ?></label>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'order' ); ?>"><?php _e( 'List order:', 'lespaul_domain_adm' ); ?></label><br />
			<select class="widefat" name="<?php echo $this->get_field_name( 'order' ); ?>" id="<?php echo $this->get_field_id( 'order' ); ?>">
				<?php
				$options = array(
					'post_title' => __( 'By name', 'lespaul_domain_adm' ),
					'post_date'  => __( 'By date', 'lespaul_domain_adm' ),
					'menu_order' => __( 'Menu order', 'lespaul_domain_adm' ),
					);
				foreach ( $options as $optId => $option ) {
					?>
					<option <?php echo 'value="'. $optId . '" '; selected( $order, $optId ); ?>><?php echo $option; ?></option>
					<?php
				}
				?>
			</select>
		</p>
		<?php
	} // /form



	/*
	*****************************************************
	*      process and save the widget options
	*****************************************************
	*/
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['title']  = $new_instance['title'];
		$instance['parent'] = $new_instance['parent'];
		$instance['order']  = $new_instance['order'];

		return $instance;
	} // /update



	/*
	*****************************************************
	*      output the widget content
	*****************************************************
	*/
	function widget( $args, $instance ) {
		global $post, $page_exclusions;
		extract( $args );
		extract( $instance );

		$post    = ( is_home() ) ? ( get_post( get_option( 'page_for_posts' ) ) ) : ( $post );
		$parents = ( isset( $post->ancestors ) ) ? ( $post->ancestors ) : ( null ); //get all parent pages in array
		$order   = ( isset( $order ) ) ? ( $order ) : ( 'menu_order' );

		if ( $parent && ! empty( $parents ) )
			$grandparent = $parents[0]; //get direct parent
		elseif ( ! $parent && ! empty( $parents ) )
			$grandparent = end( $parents ); //get the first parent page (at the end of the array)
		else
			$grandparent = '';

		$titleAlt = ( $grandparent ) ? ( '<a href="' . get_permalink( $grandparent ) . '">' . get_the_title( $grandparent ) . '</a>' ) : ( '<a href="' . get_permalink( $post->ID ) . '">' . get_the_title( $post->ID ) . '</a>' );

		$pageIDs = get_all_page_ids();

		foreach ( $pageIDs as $pageID ) {
			if ( ! wm_restriction_page( $pageID ) ) {
				$page_exclusions .= ( $page_exclusions ) ? ( ',' . $pageID ) : ( $pageID );
			}
		}

		//subpages or siblings
		if ( $grandparent )
			$children = wp_list_pages( 'sort_column=' . $order . '&exclude=' . $page_exclusions . '&title_li=&child_of=' . $grandparent . '&echo=0&depth=3' );
		else
			$children = wp_list_pages( 'sort_column=' . $order . '&exclude=' . $page_exclusions . '&title_li=&child_of=' . $post->ID . '&echo=0&depth=3' );

		//no need to display on archive pages, single post page and when there area no subpages
		if ( is_search() || is_404() || is_archive() || is_single() || ! $children )
			return;

		echo $before_widget;

		//if the title is not filled, no title will be displayed
		if ( isset( $title ) && '' != $title && ' ' != $title )
			echo $before_title . apply_filters( 'widget_title', $title ) . $after_title;
		elseif ( $titleAlt )
			echo $before_title . $titleAlt . $after_title;

		echo '<ul class="sub-nav">' . $children . '</ul> <!-- /sub-nav -->';

		echo $after_widget;
	} // /widget
} // /wm_subpages

?>