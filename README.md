# Streamlist Plugin 0.6.4

Stream your favorite radios in a playlist with HTML5 audio.

*Your browser must support [HTML5 audio tag](https://en.wikipedia.org/wiki/HTML5_Audio)*.

Inspired by the tutorial from [Last Rose Studios](http://devblog.lastrose.com/html5-audio-video-playlist).

Check also [Medialist Plugin](https://github.com/nibreh/yellow-plugin-medialist) & [Audio Plugin](https://github.com/schulle4u/yellow-plugin-audio) for different uses.

![screenshot](https://raw.githubusercontent.com/nibreh/yellow-plugin-streamlist/master/streamlist-radio.png)

## How do I install this?

1. [Download and install Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/nibreh/yellow-plugin-streamlist/archive/master.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `master.zip` into your `system/plugins` folder.

To uninstall delete the plugin files.

## How to use Streamlist plugin?

First, create `[player]` shortcut to display the HTML5 audio player.

Then create your playlist using the `[streamlist]` shortcut with the following arguments:

`STREAMURL` = url of the radio stream  
`STREAMNAME` = name of the radio - wrap multiple words into quotes

**Note:** Your playlist must be a single paragraph. Just leave 2 spaces at the end of a line to create a line break.

By default, Streamlist comes with **Jquery 3.2.1** (https://code.jquery.com/jquery-3.2.1.min.js). You can change your version in `config.ini`.

## Example

    [player]
    
    [streamlist http://stream0.wfmu.org/freeform-128k WFMU]
    [streamlist http://stream0.wfmu.org/ichiban "WFMU Ichiban Rock and Soul"]
    [streamlist http://stream0.wfmu.org/drummer "WFMU Give the Drummer Radio"]
    
## How to found some radio streams?

Take a look here: 

- http://www.radio-browser.info
