<?php
function simple_spoiler_shortcode($atts, $content) {
    if ( ! isset($atts['title']) ) {
        $sp_name = __( 'Spoiler', 'simple-spoiler' );
    } else {
        $sp_name = $atts['title'];
    }
    return '<div class="spoiler">
	      <div class="head">'.$sp_name.'</div>
	      <div class="cont">'.$content.'</div>
	    </div>';
}
add_shortcode( 'spoiler', 'simple_spoiler_shortcode' );