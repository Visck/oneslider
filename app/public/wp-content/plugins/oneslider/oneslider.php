<?php

/**
 * Plugin Name: Oneslider
 * Plugin URI: https://visck.io
 * Description: My first slide plugin
 * Version: 0.2
 * Requires at least: 5.6
 * Author: Igor Cardoso ( Visck)
 * Author URI: https://github.com/Visck
 * License: GPL v2 or later
 * license URI: https://www.gnu.org/license/gpl-2.0.html
 * Text Domain: Onelider
 * Domain Path: /languages
 */

 /*
Oneslider is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Oneslider is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Oneslider. If not, see https://www.gnu.org/license/gpl-2.0.html .
*/

//security for don't access directly this plugin
if( ! defined('ABSPATH')){
    die('You should use this plugin through wordpress only');
    exit;
}
if ( ! class_exists('One_Slider')) {
    class One_Slider{
        function __construct(){
            $this->define_constants();

            require_once( One_Slider_PATH.'post-types/class.one-slider-cpt.php');
            $One_Slider_Post_Type = new One_Slider_Post_Type();


        }

        public function define_constants(){
           define('One_Slider_PATH', plugin_dir_path(__FILE__));
           define('One_Slider_URL', plugin_dir_url(__FILE__));
           define('One_Slider_VERSION', '1.0.0');
        }
        public static function activate(){
            update_option('rewrite_rules','');

        }

        public static function deactivate(){
            flush_rewrite_rules();

        }

        public static function uninstall(){

        }

    }
}

if( class_exists ('One_Slider')){
    register_activation_hook(__FILE__, array('One_Slider','activate'));
    register_deactivation_hook(__FILE__, array('One_Slider','deactivate'));
    register_uninstall_hook(__FILE__, array('One_Slider','uninstall'));
    $one_slider = new One_Slider();

}