# Yellow Plugin Streamlist

**Stream url in a playlist with HTML5 audio tag.**  
Plugin for [YellowCMS](http://datenstrom.se/yellow/) using jquery.  
*Your browser must support [HTML5 audio tag](https://en.wikipedia.org/wiki/HTML5_Audio)*.

![screenshot](https://raw.githubusercontent.com/nibreh/yellow-plugin-streamlist/master/screenradio.png)

Inspired by the tutorial found on [Last Rose Studios](http://devblog.lastrose.com/html5-audio-video-playlist).

Check also [Medialist Plugin](https://github.com/nibreh/yellow-plugin-medialist) & [Audio Plugin](https://github.com/schulle4u/yellow-plugin-audio) for different uses.

## How do I install this?

1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [Streamlist plugin](https://github.com/nibreh/yellow-plugin-streamlist/archive/master.zip).
3. Copy `streamlist.php` & `streamlist.js` into your `system/plugins` folder.

You can also install [Fontawesome Plugin](https://github.com/datenstrom/yellow-plugins/tree/master/fontawesome)

To uninstall delete the plugin.

## How to use Streamlist plugin?

First you must create your playlist with some url streams using the `[streamlist]` shortcut like this:

    [streamlist http://stream.url Name]
    [streamlist http://another.url "Radio Name"]

Then you must display the HTML5 audio tag player:

    [player]

## How to style my Playlist?

Note: your playlist must not contain line break.

    <style>
    span a {color:#333;background:#eee;display:block;padding:5px;}
    span a:hover {background:#ddd;}
    span.active a {color:#333;background:#ddd;font-weight:bold;}
    </style>

## Found some stream radios

http://wikradio.free.fr

