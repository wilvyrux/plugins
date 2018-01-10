<?php

defined( 'ABSPATH' ) or die( 'No No NO!' );

/*includes*/


Class Wx_Shortcodes {

	public domain = 'wx-shortcodes';
	
	function __construct (){
		$this->init();
	}

	function init(){
		$enabled_shortcodes = array(
			'wx_buttons'
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