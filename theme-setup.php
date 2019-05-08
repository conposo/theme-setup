<?php
/**
 * Plugin Name: NUXT Theme Setup
 * Description: A plugin that make needed theme setups
 * Version: 0.1
 * Author: NUXT
 * Author URI: http://nuxt.co
 * License: GPL2
 */

/*  Copyright 2019  I.Sholekov  (email : sholeka@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if(!function_exists('nxt_theme_setup')):
    
    add_action( 'after_setup_theme', 'nxt_theme_setup' );
    function nxt_theme_setup() {

        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('dark-editor-style');
        add_theme_support( 'woocommerce' );
    }

endif;
