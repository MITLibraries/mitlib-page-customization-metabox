<?php
/**
 * Plugin Name: MITlib Page Customization Metabox
 * Plugin URI: https://github.com/MITLibraries/mitlib-page-customization-metabox
 * Description: Adds a block of help text to a metabox on the page editing screen.
 * Author: MIT Libraries
 * Version: 1.0.1
 * Author URI: https://github.com/MITLibraries
 * License: GPLv2
 *
 * @package MITlib Page Customization Metabox
 * @author MIT Libraries
 * @link https://github.com/MITLibraries/mitlib-page-customization-metabox
 */

/**
 * MITlib Page Customization Metabox is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * MITlib Page Customization Metabox is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with MITlib Page Customization Metabox. If not, see https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html.
 */

// Don't call the file directly!
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Adds a meta box to the page editing screen
 */
function mitlib_page_customization_meta() {
	add_meta_box( 'mitlib_page_customization_meta', __( 'Page Customization', 'prfx-textdomain' ), 'mitlib_page_customization_meta_callback', 'page', 'side', 'high' );
}
add_action( 'add_meta_boxes', 'mitlib_page_customization_meta' );

/**
 * Outputs the content of the meta box
 *
 * @param object $post unused.
 */
function mitlib_page_customization_meta_callback( $post ) {
	echo 'To customize the breadcrumb and the link to the top-level category at the top of the page, see the <strong>Categories</strong> box below.';
}
