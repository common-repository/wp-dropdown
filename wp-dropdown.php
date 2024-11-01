<?php 
/*
Plugin Name: WP Dropdown
Plugin URI: http://madebyraygun.com/plugins-and-themes/wp-dropdown/
Description: A shortcode that generates a select list of all sub-pages of the specified page. 
Author: Dalton Rooney
Version: 0.1
Author URI: http://madebyraygun.com

Copyright 2011 Raygun Design LLC (email : contact@madebyraygun.com)
This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/ 


// create the shortcode
add_shortcode( 'wp-dropdown', 'wp_dropdown_shortcode' );
   
function wp_dropdown_shortcode( $atts ) {
	
	extract( shortcode_atts( array(
		'depth'	=>	'',
		'child_of'	=>	'',
		'selected'	=>	'',
		'exclude_tree'	=>	'',
		'name'	=>	'',
		'sort_order'	=>	'',
		'sort_column'	=>	'',
		'hierarchical'	=>	'',
		'exclude'	=>	'',
		'include'	=>	'',
		'meta_key'	=>	'',
		'meta_value'	=>	'',
		'authors'	=>	'',
		'exclude_tree'	=>	'',
		'post_type'	=>	''
	), $atts ) );

	$atts['echo'] = 0;
	
	$wp_dropdown = '<form action="' . site_url() . '" method="get">';
   	$wp_dropdown .= wp_dropdown_pages( $atts );
	$wp_dropdown .= '<input type="submit" name="submit" value="view" />
   </form>';
	return $wp_dropdown;

} //ends the wp_dropdown_shortcode function ?>