<?php

/*
Plugin Name: TwentyTen Vanishing Header
Description: Removes the large white space in the header when no header image is defined in the TwentyTen theme
Version: 1
Author: Jarret Cade
License: GPLv2 or later

Copyright 2011 JarretC (email : info@810media.com)

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Sofware Foundation.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

*/


/*
* Checks if the current theme is TwentyTen and whether or not the header image is active or removed
*/
	
$templatecheck = get_template();

function tvh_shrink_header() {
	if ( current_theme_supports('custom-header') && !get_header_image() && $templatecheck = 'twentyten' ) :
		echo "<style type='text/css'>
			#branding img {
				height: 0px;
				border: none;
			}
		</style>";
	endif;
}
add_action( 'wp_head', 'tvh_shrink_header');

?>