=== WP Dropdown ===
Contributors: daltonrooney 
Tags: shortcode, wp_dropdown_pages, navigation
Requires at least: 3.0
Tested up to: 3.2.1
Stable tag: 0.1

A shortcode that generates a select list of all sub-pages of the specified page. Works as a wrapper for the wp_dropdown_pages() function.

Made by <a href="http://madebyraygun.com/">Raygun</a>.

== Installation ==

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.

The plugin supports all of the parameters from the <a href="http://codex.wordpress.org/Template_Tags/wp_dropdown_pages">wp_dropdown_pages function</a> except the echo & name parameters.

To use, insert the [wp-dropdown] shortcode into your content editor. Example: [wp-dropdown child_of=33 depth=1 selected=44]. All parameters are optional, the default usage will display all pages in the site in a hierarchichal indented format. You can also easily add this to a widget if you have enabled shortcodes in widgets.

== Screenshots ==
1. Example of dropdown in content area.

== Changelog ==

0.1: First release.