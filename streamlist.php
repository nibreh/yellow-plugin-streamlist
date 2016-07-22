<?php
// Copyright (c) 2013-2015 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// HTML5 Streamlist plugin
// Inspired by http://devblog.lastrose.com/html5-audio-video-playlist
class YellowStreamlist
{
	const VERSION = "0.6.4";
	var $yellow;			//access to API
	
	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		if(!$this->yellow->config->isExisting("jqueryCdn"))
		{
			$this->yellow->config->setDefault("jqueryCdn", "https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/");
		}
	}
	
	// Handle page content parsing of custom block
	function onParseContentBlock($page, $name, $text, $shortcut)
	{

		$output = null;
		if($name=="streamlist" && $shortcut)
		{
			list($streamurl, $streamname) = $this->yellow->toolbox->getTextArgs($text);
            		if(empty($streamname)) $streamname = "Stream Name ?";
			$output .= "<span>\n";
			$output .= "<a href=\"".htmlspecialchars($streamurl)."\"><i class=\"fa fa-play\"></i> ".htmlspecialchars($streamname)."\n";
			$output .= "</a></span>\r\n";
		}

		if($name=="player" && $shortcut)
		{
			$output .= "<audio id=\"player\" src=\"\" controls>\n";
			$output .= "</audio>\r\n";

		}
		return $output;
	}

	// Handle page extra HTML data
	function onExtra($name)
	{
		$output = null;

		if($name=="header")
		{
			$jqueryCdn = $this->yellow->config->get("jqueryCdn");
			$output .= "<script type=\"text/javascript\" src=\"{$jqueryCdn}jquery.min.js\"></script>\n";
		}

		if($name=="footer")
		{
			$pluginLocation = $this->yellow->config->get("serverBase").$this->yellow->config->get("pluginLocation");
			$output .= "<script type=\"text/javascript\" src=\"{$pluginLocation}streamlist.js\"></script>\n";
		}
		return $output;
	}
}

$yellow->plugins->register("streamlist", "YellowStreamlist", YellowStreamlist::VERSION);
?>
