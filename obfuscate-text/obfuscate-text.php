<?php
/**
 * Plugin Name: ObfuscateText
 * Description: Obfuscate text for mailto links
 * Version: 1.0
 * Author: Gelform
 * Author URI: http://gelform.com
 */




// initialize the plugin
Obfuscate_Text::init();



class Obfuscate_Text
{
	static function init ()
	{
		add_shortcode( 'obfuscate', array(__CLASS__, 'render_shortcode') );
	}



	static function render_shortcode ( $attrs, $content )
	{
		if ( !empty($content) )
		{
			$attrs['content'] = $content;
		}

		$char_arr = str_split($attrs['content']);

		$return = '';
		foreach ($char_arr as $char)
		{
			$return .= sprintf('&#%s;', ord($char));
		}

		return $return;
	} // shortcode


} // Text_Obfuscate






