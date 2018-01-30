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

	public $domain = 'wx-shortcodes';
	public $plugin_path = '';
	
	function __construct (){
		$this->plugin_path = dirname(__FILE__);
		$this->init();
	}

	function init(){
		$enabled_shortcodes = array(
			'wx_buttons',
// 			'wx_buttons',
		);
		foreach ($enabled_shortcodes as $v) {
			$file_path = $this->plugin_path . '/shortcodes/'.$v.'.php';
			if( file_exists($file_path) ){
				include $file_path;
			}
		}
	}

	function register_settings(){

	}

}

new Wx_Shortcodes();
