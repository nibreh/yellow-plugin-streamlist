<?php
// HTML5 Streamlist plugin, https://github.com/nibreh/yellow-plugin-streamlist
// Copyright (c) 2018 Nibreh, inspired by http://devblog.lastrose.com/html5-audio-video-playlist
// This file may be used and distributed under the terms of the public license.

class YellowStreamlist {
	const VERSION = "0.7.7";
    public $yellow;         //access to API
	
	// Handle initialisation
	public function onLoad($yellow) {
		$this->yellow = $yellow;
		if(!$this->yellow->config->isExisting("jqueryCdn")) {
			$this->yellow->config->setDefault("jqueryCdn", "https://code.jquery.com/jquery-3.3.1.min.js");
		}
	}
	
	// Handle page content parsing of custom block
	public function onParseContentBlock($page, $name, $text, $shortcut) {
		$output = null;
		if($name=="streamlist" && $shortcut) {
			list($streamurl, $streamname) = $this->yellow->toolbox->getTextArgs($text);
            		if(empty($streamname)) $streamname = "Stream Name ?";
			$output .= "<span class=\"streamlist\">\n";
			$output .= "<a href=\"".htmlspecialchars($streamurl)."\">&#x25BA;".htmlspecialchars($streamname)."\n";
			$output .= "</a></span>\r\n";
		}
		if($name=="player" && $shortcut) {
			$output .= "<audio id=\"player\" controls></audio>\n";
		}
		return $output;
	}

	// Handle page extra HTML data
	public function onExtra($name) {
		$output = null;
		if($name=="header") {
			$jqueryCdn = $this->yellow->config->get("jqueryCdn");
			$output .= "<script type=\"text/javascript\" src=\"{$jqueryCdn}\"></script>\n";
		}
		if($name=="footer") {
			$pluginLocation = $this->yellow->config->get("serverBase").$this->yellow->config->get("pluginLocation");
			$output .= "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$pluginLocation}streamlist.css\" />\n";
			$output .= "<script type=\"text/javascript\" src=\"{$pluginLocation}streamlist.js\"></script>\n";
		}
		return $output;
	}
}

$yellow->plugins->register("streamlist", "YellowStreamlist", YellowStreamlist::VERSION);
