<?php
/**
 * @package WX_Shortcodes
 * @version 1.0
 */
/*
Plugin Name: WX Shortcodes
Plugin URI: #
Description: 
Author: Spider Owls
Version: 1.0
Author URI: #
*/


defined( 'ABSPATH' ) or die( 'No No NO!' );

Class Wx_Shortcodes {

	public domain = 'wx-shortcodes';
	
	function __construct (){
		$this->init();
	}

	function init(){
		$enabled_shortcodes = array(
// 			'wx_buttons',
// 			'wx_buttons',
		);

		foreach ($enabled_shortcodes as $v) {
			$f = 'shortcodes/'.$v.'.php';
			if(file_exists($f)){
				include $f;
			}
		}
	}

	function register_settings(){

	}

}

new Wx_Shortcodes();
