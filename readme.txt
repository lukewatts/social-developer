=== Plugin Name ===

Contributors: LukeQuietus
Plugin Name: Social Developer
Tags: github, codepen, social icons, shortcodes, social, sohortcode, icons, developer
Author URI: http://luke-watts.com/
Author: Luke Watts
Requires at least: 3.0.1
Tested up to: 3.9
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Version: 0.1

A Wordpress plugin for web designers and developers to easily add Github and Codepen icons to their website using shortcodes.

== Description ==

I started writing this plugin for myself. It's extremely rare I find a theme which has Github among it's choice of built in social icons and even rarer to find Codepen on the list. Do web designers and developers not need websites also?! Are we not social? Indeed we are social....
but we're social via our projects and out code and we're proud of those things so we should easily be able to link people
to those places from our sites and blogs. So here's a plugin to help us all do that.

== Installation ==

1. Upload the `social-developer` folder to the `/wp-content/plugins/` directory via FTP (recommended) or through Wordpress.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Simply place the shortcodes in your content or in any sidebar widget or part of your theme that allows shortcodes.

== The Shortcodes ==

[sd_github]
[sd_codepen]

The attributes are optional.

Here is an example of all the attributes you can set in each shortcode.

= Github =
[sd_github link="https://github.com/{your-user-name}" size="{size-in-px}" new_tab="{yes/no||true/false}"]

= Codepen =
[sd_codepen link="http://codepen.io/{your-user-name}" size="{size-in-px}" new_tab="{yes/no||true/false}"]

= Example =
[sd_github link="https://github.com/lukewatts" size="48px" new_tab="no"]

= NOTE =
The defaults are the Github's and Codepen's homepage URL respectively, size="22px" and new_tab="yes"
The new_tab attribute will open the link in a new tab by default. You can set this to open in the current
tab by setting new_tab="no" or new_tab="false". Whichever you prefer. This is so it can match your themes
social icons behavior.

== Frequently Asked Questions ==

= What format are the icons? =

The icons are infact a font called [Genericons](http://genericons.com/ "a free, GPL, flexible icon font for blogs!") from the awesome guys and gals at Automattic.

(Look for the smiley face)

= Can I change the color of the icon? =

You can use CSS to change the colors from your themes Custom CSS panel or the Appearance > Editor.

= What are the icons CSS classes? =

To access the Github icon use: span.genericon.genericon-github
To access the Codepen icon use: span.genericon.genericon-codepen

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets 
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png` 
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 0.1 =
* First release

== Features ==

= Current features =

* Shortcodes for Github and Codepen icons
* Set URL, size of icon and whether or not to open the link in a new tab or not
* "Quicktag" buttons in HTML editor for quick insertion of each shortcode

= Futire Features =

* Admin panel where users can set the colors, opacity and transition for :hover and :active states
* A widget with more options
* Custom theme hooks to place icons anywhere in any theme
* Add the full set of the Genericon social icons (if there's a demand)