<?php
/**
 Plugin Name: Character Count Excerpt
 Plugin URI: http://get10up.com/plugins/wordpress-character-count-excerpt/
 Description: Generate automated excerpts using character count instead of word count. New Reading setting to specify length.   
 Version: 1.0
 Author: Jake Goldman (10up LLC)
 Author URI: http://www.get10up.com

    Plugin: Copyright 2011 10up (email : jake@get10up.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class character_count_excerpt {
	
	function character_count_excerpt() {
		remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );				// remove default excerpt trimming
		add_filter( 'get_the_excerpt', array( $this, 'trim_excerpt' ) );	// add our own trimming
		
		add_action( 'admin_init', array( $this, 'admin_init' ) );
	}
	
	public function trim_excerpt( $text ) {
		$raw_excerpt = $text;
		
		if ( '' == $text ) {
			$text = get_the_content('');
			$text = strip_shortcodes( $text );
			$text = apply_filters( 'the_content', $text );
			$text = str_replace( ']]>', ']]&gt;', $text );
			$text = strip_tags( $text );
			
			$excerpt_length = apply_filters( 'character_count_excerpt_length', $this->get_excerpt_characters() );
			
			if ( strlen( $text ) > $excerpt_length ) {
				$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
				$text = substr( $text, 0, $excerpt_length + 1 );
				
				$words = preg_split( "/[\n\r\t ]+/", $text, -1, PREG_SPLIT_NO_EMPTY );
				
				// if the last character is not a white space, we remove the cut off last word
				preg_match( "/[\n\r\t ]+/", $text, $lastchar, 0, $excerpt_length );
				if ( empty( $lastchar ) ) array_pop( $words );
					
				$text = implode(' ', $words);
				$text = $text . $excerpt_more;
			}
		}
		
		return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
	}
	
	function admin_init() {
		load_plugin_textdomain( 'character-count-excerpt', false, dirname( plugin_basename( __FILE__ ) ) . '/localization/' );
		
		register_setting( 'reading', 'character_count_excerpt', array( $this, 'sanitize_options' ) ); //array of fundamental options including ID and caching info
		add_settings_field( 'character_count_excerpt', __( 'Excerpt length', 'character-count-excerpt' ), array( $this, 'settings_field' ), 'reading' );
	}
	
	function sanitize_options( $input ) {
		$new_input = empty( $input ) ? 300 : (int) $input;
		return $new_input;
	}
	
	function settings_field( $args ) {
		$character_count_excerpt = $this->get_excerpt_characters();
	?>
		<input name="character_count_excerpt" type="text" id="character_count_excerpt" value="<?php echo esc_attr( (int) $character_count_excerpt ); ?>" class="small-text" />
		<span class="description"><?php _e( 'Maximum number of characters for auto generated excerpt', 'character-count-excerpt' ); ?></span>
	<?php
	}
	
	function get_excerpt_characters() {
		if ( ! $character_count_excerpt = get_option('character_count_excerpt') )
			$character_count_excerpt = 300;
			
		return (int) $character_count_excerpt;
	}
}

$character_count_excerpt = new character_count_excerpt;