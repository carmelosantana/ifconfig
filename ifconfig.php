<?php 
/*
Plugin Name: ifconfig
Plugin URI: http://www.carmelosantana.com
Description: Display IP and host information.
Version: 0.2
Author: @carmelosantana
Author URI: http://www.carmelosantana.com
GitHub Plugin URI: carmelosantana/ifconfig
GitHub Branch: master
*/

function ifc_footer($out=null){
	// start IP
	$out.= ' IP <code class="alternate">' . $_SERVER['SERVER_ADDR'] . '</code>';

	// if IP + ADDR are same, only do IP
	$add = gethostbyname($_SERVER['SERVER_NAME']);
	if ( $_SERVER['SERVER_ADDR'] !== $add )
		$out.= ' ADDR <code class="alternate">' . $add . '</code>';

	// back
	return $out . ' Host <code class="alternate">' . gethostname() . '</code>';
}

add_filter('admin_footer_text', 'ifc_footer');