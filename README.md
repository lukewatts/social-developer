Social Developer
================

A Wordpress plugin for web designers and developers to easily add Github and Codepen icons to their website using shortcodes.

Instructions
------------
The attributes are optional.
[sd_github] would default to https://github.com, a size of 22px and would open the link in a new tab.
[sd_codepen] would default to http://codepen.io, a size of 22px and would open the link in a new tab.

However you can specify your username, custom sizes as follows and turn off "Open in new tab" behavior as follows:

Github Icon Shortcode
[sd_github link="https://github.com/{your-user-name}" size="{the-size-in-px}" new_tab="no"]

Codepen Icon Shortcode
[sd_codepen link="http://codepen.io/{your-user-name}" size="{the-size-in-px}" new_tab="no"]

Features
--------
* Shortcodes for Github and Codepen icons
* Set URL, size of icon and whether or not to open the link in a new tab or not
* "Quicktag" buttons in HTML editor for quick insertion of each shortcode

Future features
---------------
* Set URL, default open tab behaviour and colors for normal state, :active and :hover in Options panel
* A widgets with more options
* Place anywhere in a theme with a custom hook
* Add the rest of the Genericon social icons if there's a demand
* Add TinyMCE buttons

