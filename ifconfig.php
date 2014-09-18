<?php 
/*
Plugin Name: ifconfig
Plugin URI: http://www.carmelosantana.com
Description: Display IP and host information.
Version: 0.1
Author: @carmelosantana
Author URI: http://www.carmelosantana.com
*/

function ifc_footer($out=null){
	return $out . '<p class="alignleft">IP <code>' . $_SERVER['SERVER_ADDR'] . '</code> | ' . 'ADDR <code>' . gethostbyname($_SERVER['SERVER_NAME']) . '</code> | ' . 'Host <code>' . gethostname() . '</code></p>';
}

add_filter('admin_footer_text', 'ifc_footer');