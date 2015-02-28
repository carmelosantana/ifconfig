<?php 
/*
Plugin Name: ifconfig
Plugin URI: http://www.carmelosantana.com/plugins/
Description: Display IP and host information.
Version: 0.3
Author: @carmelosantana
Author URI: http://www.carmelosantana.com
*/

function ifc_footer($def=null){
	$out = '<p class="alignleft">' . $def;
	foreach (ifc_define() as $key => $value)
		$out.= ' ' . $key . ' <code class="alternate">' . $value . '</code>';

	return $out . '</p>';
}

function ifc_define(){
	return array(
		'IP' => $_SERVER['SERVER_ADDR'],
		'Host' => gethostbyname($_SERVER['SERVER_NAME']),
	);
}

add_filter('admin_footer_text', 'ifc_footer');