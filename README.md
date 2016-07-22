# Streamlist Plugin 0.6.4

Stream your favorite radios in a playlist with HTML5 audio.

*Your browser must support [HTML5 audio tag](https://en.wikipedia.org/wiki/HTML5_Audio)*.

Inspired by the tutorial found on [Last Rose Studios](http://devblog.lastrose.com/html5-audio-video-playlist).

Check also [Medialist Plugin](https://github.com/nibreh/yellow-plugin-medialist) & [Audio Plugin](https://github.com/schulle4u/yellow-plugin-audio) for different uses.

![screenshot](https://raw.githubusercontent.com/nibreh/yellow-plugin-streamlist/master/streamlist-radio.png)

## How do I install this?

1. [Download and install Yellow](https://github.com/datenstrom/yellow/).
2. Download and install [Fontawesome plugin](https://github.com/datenstrom/yellow-plugins/tree/master/fontawesome).
3. [Download plugin](https://github.com/nibreh/yellow-plugin-streamlist/archive/master.zip). If you are using Safari, right click and select 'Download file as'.
4. Copy `master.zip` into your `system/plugins` folder.

To uninstall delete the plugin files.

## How to use Streamlist plugin?

First you must create your playlist with some radio streams using the `[streamlist]` shortcut like this:

    [streamlist http://stream0.wfmu.org/freeform-128k WFMU]
    [streamlist http://stream0.wfmu.org/ichiban "Ichiban Rock and Soul"]
    [streamlist http://jazzradio.ice.infomaniak.ch/jazzradio-high.aac "Jazz Radio"]
    [streamlist http://audio.scdn.arkena.com/11016/fip-midfi128.mp3 "FIP Radio"]

**Note:** Your playlist must be a single paragraph. Just leave 2 spaces at the end of a line to create a line break.

Then you must display the HTML5 audio tag player:

    [player]

## How to found some radio streams?

Take a look here: http://wikradio.free.fr
