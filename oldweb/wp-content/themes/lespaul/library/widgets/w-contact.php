<?php
/*
*****************************************************
* WEBMAN'S WORDPRESS THEME FRAMEWORK
* Created by WebMan - www.webmandesign.eu
*
* Contact information widget
*****************************************************
*/

/*
*****************************************************
*      ACTIONS AND FILTERS
*****************************************************
*/
add_action( 'widgets_init', 'reg_wm_contact_info' );



/*
* Widget registration
*/
function reg_wm_contact_info() {
	register_widget( 'wm_contact_info' );
} // /reg_wm_contact_info





/*
*****************************************************
*      WIDGET CLASS
*****************************************************
*/
class wm_contact_info extends WP_Widget {
	/*
	*****************************************************
	*      widget constructor
	*****************************************************
	*/
	function __construct() {
		$id     = 'wm-contact-info';
		$prefix = ( wm_option( 'branding-panel-no-logo' ) || ! strpos( wm_option( 'branding-panel-logo' ), 'logo-' . WM_THEME_SHORTNAME . '-admin.png' ) ) ? ( '' ) : ( WM_THEME_NAME . ' ' );
		$name   = '<span>' . $prefix . __( 'Contact', 'lespaul_domain_adm' ) . '</span>';
		$widget_ops = array(
			'classname'   => 'wm-contact-info',
			'description' => __( 'Contact information', 'lespaul_domain_adm' )
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
		$title    = ( isset( $title ) ) ? ( $title ) : ( null );
		$name     = ( isset( $name ) ) ? ( $name ) : ( null );
		$address  = ( isset( $address ) ) ? ( $address ) : ( null );
		$hours    = ( isset( $hours ) ) ? ( $hours ) : ( null );
		$phone    = ( isset( $phone ) ) ? ( $phone ) : ( null );
		$email    = ( isset( $email ) ) ? ( $email ) : ( null );

		//HTML to display widget settings form
		?>
		<p class="wm-desc"><?php _e( 'Displays specially styled contact information. JavaScript anti-spam protection will be applied on the email address (also, email will not be displayed when JavaScript is turned off).', 'lespaul_domain_adm' ) ?></p>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'lespaul_domain_adm' ) ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'name' ); ?>"><?php _e( 'Name:', 'lespaul_domain_adm' ) ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name ); ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'address' ); ?>"><?php _e( 'Address:', 'lespaul_domain_adm' ) ?></label><br />
			<textarea cols="50" rows="5" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>"><?php echo esc_attr( $address ); ?></textarea>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'hours' ); ?>"><?php _e( 'Business hours:', 'lespaul_domain_adm' ) ?></label><br />
			<textarea cols="50" rows="3" id="<?php echo $this->get_field_id( 'hours' ); ?>" name="<?php echo $this->get_field_name( 'hours' ); ?>"><?php echo esc_attr( $hours ); ?></textarea>
			<small><?php _e( 'Use comma to separate days and times<br />(such as "Friday, 9:00 - 16:00")', 'lespaul_domain_adm' ) ?></small>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'phone' ); ?>"><?php _e( 'Phone number:', 'lespaul_domain_adm' ) ?></label>
			<textarea cols="50" rows="2" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>"><?php echo esc_attr( $phone ); ?></textarea>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'Email address:', 'lespaul_domain_adm' ) ?></label>
			<textarea cols="50" rows="2" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>"><?php echo esc_attr( $email ); ?></textarea>
			<small><?php _e( 'JavaScript anti-spam protection applied', 'lespaul_domain_adm' ); ?></small>
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

		$instance['title']   = $new_instance['title'];
		$instance['name']    = $new_instance['name'];
		$instance['address'] = $new_instance['address'];
		$instance['hours']   = $new_instance['hours'];
		$instance['phone']   = $new_instance['phone'];
		$instance['email']   = $new_instance['email'];

		return $instance;
	} // /update



	/*
	*****************************************************
	*      output the widget content
	*****************************************************
	*/
	function widget( $args, $instance ) {
		extract( $args );
		extract( $instance );

		$out = $outAddress = '';

		//if the title is not filled, no title will be displayed
		if ( isset( $title ) && '' != $title && ' ' != $title )
			$out .= $before_title . apply_filters( 'widget_title', $title ) . $after_title;

		//HTML to display output
		//address
		if ( ( isset( $name ) && $name ) || ( isset( $address ) && $address ) )
			$outAddress .= '<div class="address contact-info"><strong>' . $name . '</strong><br />' . $address . '</div>';

		//hours
		if ( isset( $hours ) && $hours ) {
			if ( false === strpos( $hours, ',' ) )
				$hours .= '&minus;,0:00 &minus; 0:00';
			$hours = trim( $hours );
			$hours = str_replace( array( "\r\n", "\r", "\n" ), '</td></tr><tr><td>', $hours );
			$hours = str_replace( array( ',', ', ' ), '</td><td>', $hours );
			$hours = str_replace( '-', '&minus;', $hours );
			$hours = '<table><tr><td>' . $hours . '</td></tr></table>';
			$outAddress .= '<div class="hours contact-info">' . $hours . '</div>';
		}

		//phone numbers
		if ( isset( $phone ) && $phone )
			$outAddress .= '<div class="phone contact-info">' . $phone . '</div>';

		//email addresses
		if ( isset( $email ) && $email ) {
			$regex = '/(\S+@\S+\.\S+)/i';
			preg_match_all( $regex, $email, $emailArray );
			if ( $emailArray && is_array( $emailArray ) ) {
				foreach ( $emailArray[0] as $e ) {
					$email = str_replace( $e, '<a href="#" data-address="' . wm_nospam( $e ) . '" class="email-nospam">' . wm_nospam( $e ) . '</a>', $email );
				}
			}
			$outAddress .= '<div class="email contact-info">' . $email . '</div>';
		}

		//output wrapper
		if ( $outAddress )
			$out .= '<div class="address-container">' . apply_filters( 'wm_default_content_filters', $outAddress ) . '</div>';

		if ( $out )
			echo $before_widget . $out . $after_widget;
	} // /widget
} // /wm_contact_info

?>