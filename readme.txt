=== TwentyTen Vanishing Header ===
Contributors: JarretC
Tags: TwentyTen, header, remove TwentyTen header whitespace
Requires at least: 3.0
Tested up to: 3.1
Stable tag: trunk

Removes the whitespace in the TwentyTen header when no header image is specified.

== Description ==

When there is no header image specified when using the TwentyTen theme a large whitespace is left. This plugin removes that large white space giving the page a cleaner look.

== Installation ==

1. Upload `twentyten_vanishing_header.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Does this work on other themes? =

No, it only specifically works for TwentyTen.

= Will it collapse the header on pages that have a custom header image? = 

Nope, it checks to see if there is an image being used first. So if it finds that there is an image being used it doesn't modify anything.

== Changelog ==

= 1.0 =
* Inital release