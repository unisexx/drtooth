<?php
/**
 * WPBakery Visual Composer shortcodes
 *
 * @package WPBakeryVisualComposer
 *
 */

class WPBakeryShortCode_VC_Button extends WPBakeryShortCode {

    protected function content($atts, $content = null) {
        $color = $size = $icon = $target = $href = $el_class = $title = $position = '';
        extract(shortcode_atts(array(
            'color' => 'wpb_button',
			'text_color' => '#FFFFFF',
			'hover_text_color' => '#FFFFFF',
			'custom_button_color' => '',
			'hover_color' => '',
			'custom_button_hover_color' => '',
            'size' => '',
            'icon' => 'none',
            'target' => '_self',
            'href' => '',
            'el_class' => '',
            'title' => __('Text on the button', "js_composer"),
            'position' => '',
			'top_margin' => 'none'
        ), $atts));
        $output = '';
        $a_class = '';

        if ( $el_class != '' ) {
            $tmp_class = explode(" ", $el_class);
            if ( in_array("prettyphoto", $tmp_class) ) {
                wp_enqueue_script( 'prettyphoto' );
                wp_enqueue_style( 'prettyphoto' );
                $a_class .= ' prettyphoto'; $el_class = str_ireplace("prettyphoto", "", $el_class);
            }
            if ( in_array("pull-right", $tmp_class) && $href != '' ) { $a_class .= ' pull-right'; $el_class = str_ireplace("pull-right", "", $el_class); }
            if ( in_array("pull-left", $tmp_class) && $href != '' ) { $a_class .= ' pull-left'; $el_class = str_ireplace("pull-left", "", $el_class); }
        }

        if ( $target == 'same' || $target == '_self' ) { $target = ''; }
        $target = ( $target != '' ) ? ' target="'.$target.'"' : '';

		$icon_orig = $icon;
		
		$color = ($custom_button_color!='' ? $custom_button_color : $color);
		$hover_color = ($custom_button_hover_color!='' ? $custom_button_hover_color : $hover_color);
        $size = ( $size != '' && $size != 'wpb_regularsize' ) ? ' '.$size : ' '.$size;
        $icon = ( $icon != '' && $icon != 'none' ) ? ' '.$icon.($icon=="icon_small_arrow" ? ($color=="transparent" ? ' margin_right_black' : ' margin_right_white') : '') : '';
        $i_icon = ( $icon != '' ) ? ' <i class="icon"> </i>' : '';
        $position = ( $position != '' ) ? ' '.$position.'-button-position' : '';
        $el_class = $this->getExtraClass($el_class);

        //if ( $href != '' ) {
			 $output .= '<a style="color:'.$text_color.';background-color:'.$color.';border-color:'.($color=="transparent" ? '#E0E0E0' : $color).';" onMouseOver="this.style.color=\''.$hover_text_color.'\';this.style.backgroundColor=\''.$hover_color.'\';this.style.borderColor=\''.($hover_color=="transparent" ? '#E0E0E0' : $hover_color).'\'" onMouseOut="this.style.color=\''.$text_color.'\';this.style.backgroundColor=\''.$color.'\';this.style.borderColor=\''.($color=="transparent" ? '#E0E0E0' : $color).'\'" title="'.$title.'" href="'.$href.'"'.$target.' class="mc_button more'.$size.$icon.$el_class.$position.$a_class.($top_margin!='none' ? ' ' . $top_margin : '').'">'.$title.($icon_orig!="icon_small_arrow" ? $i_icon : '').'</a>';
            /*$output .= '<span class="wpb_button '.$color.$size.$icon.$el_class.$position.'">'.$title.$i_icon.'</span>';
            $output = '<a class="wpb_button_a'.$a_class.'" title="'.$title.'" href="'.$href.'"'.$target.'>' . $output . '</a>';*/
        /*} else {
            $output .= '<button class="wpb_button '.$color.$size.$icon.$el_class.$position.'">'.$title.$i_icon.'</button>';
        }*/

        return $output . $this->endBlockComment('button') . "\n";
    }
    public function outputTitle($title) {
        return '';
    }
}

class WPBakeryShortCode_VC_Cta_button extends WPBakeryShortCode {

    protected function content( $atts, $content = null ) {
        $color = $icon = $size = $target = $href = $title = $call_text = $position = $el_class = '';
        extract(shortcode_atts(array(
            'color' => 'wpb_button',
            'icon' => 'none',
            'size' => '',
            'target' => '',
            'href' => '',
            'title' => __('Text on the button', "js_composer"),
            'call_text' => '',
            'position' => 'cta_align_right',
            'el_class' => ''
        ), $atts));
        $output = '';

        $el_class = $this->getExtraClass($el_class);

        if ( $target == 'same' || $target == '_self' ) { $target = ''; }
        if ( $target != '' ) { $target = ' target="'.$target.'"'; }

        $icon = ( $icon != '' && $icon != 'none' ) ? ' '.$icon : '';
        $i_icon = ( $icon != '' ) ? ' <i class="icon"> </i>' : '';
        
        $color = ( $color != '' ) ? ' wpb_'.$color : '';
        $size = ( $size != '' && $size != 'wpb_regularsize' ) ? ' wpb_'.$size : ' '.$size;

        $a_class = '';
        if ( $el_class != '' ) {
            $tmp_class = explode(" ", $el_class);
            if ( in_array("prettyphoto", $tmp_class) ) {
                wp_enqueue_script( 'prettyphoto' );
                wp_enqueue_style( 'prettyphoto' );
                $a_class .= ' prettyphoto'; $el_class = str_ireplace("prettyphoto", "", $el_class);
            }
        }
        
        $button = '<button class="wpb_button '.$color.$size.$icon.'">'.$title.$i_icon.'</button>';
        if ( $href != '' ) {
            $button = '<span class="wpb_button '.$color.$size.$icon.'">'.$title.$i_icon.'</span>';
            $button = '<a class="wpb_button_a'.$a_class.'" href="'.$href.'"'.$target.'>' . $button . '</a>';
        } else {
            //$button = '<button class="wpb_button '.$color.$size.$icon.'">'.$title.$i_icon.'</button>';
            $button = '';
            $el_class .= ' cta_no_button';
        }

        $output .= '<div class="wpb_call_to_action wpb_content_element clearfix '.$position.$el_class.'">';
        if ( $position != 'cta_align_bottom' ) $output .= $button;
        $output .= apply_filters('wpb_cta_text', '<h2 class="wpb_call_text">'. $call_text . '</h2>', array('content'=>$call_text));
        //$output .= '<h2 class="wpb_call_text">'. $call_text . '</h2>';
        if ( $position == 'cta_align_bottom' ) $output .= $button;
        $output .= '</div> ' . $this->endBlockComment('.wpb_call_to_action') . "\n";

        return $output;
    }
}