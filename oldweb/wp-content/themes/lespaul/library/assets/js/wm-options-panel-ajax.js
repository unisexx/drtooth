/*
*****************************************************
* WEBMAN'S WORDPRESS THEME FRAMEWORK
* Created by WebMan - www.webmandesign.eu
*
* WebMan Options Panel AJAX scripts
*****************************************************
*/

jQuery.fn.serializeJSON = function() {
	var json = {};
	jQuery.map( jQuery( this ).serializeArray(), function( n, i ) {
			json[n['name']] = n['value'];
		} );
	return json;
};



jQuery( function() {

	jQuery( '#wm-theme-options-form' ).submit( function() {

		jQuery( '#wm-theme-options-form input.submit' ).attr( 'disabled', true );

		var data = jQuery( this ).serializeJSON();

		//do AJAX and get response (result)
		jQuery.post( ajaxurl, data, function( response ) {
				jQuery( '<div id="message" class="wm-message"><p>' + response + '</p></div>' ).prependTo( '.wm-wrap #nav' ).hide().fadeIn( 300, function() {
						var $this = jQuery( this );
						$this.delay( 3500 ).fadeOut( 300, function() {
							$this.remove();
						} );
					} );

				jQuery( '#wm-theme-options-form input.submit' ).attr( 'disabled', false );

				//additional immediate actions
					if ( data['wm-branding-panel-logo'] && ! data['wm-branding-panel-no-logo'] )
						jQuery( '.wm-wrap .logo img' ).attr( 'src', data['wm-branding-panel-logo'] );

					if ( data['wm-branding-panel-no-logo'] )
						jQuery( '.wm-wrap .logo img' ).hide();
					else
						jQuery( '.wm-wrap .logo img' ).show();

			} );

		return false;

	} );

} );