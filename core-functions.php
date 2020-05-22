<?php
/**
 * Neu dash
 * 
 * @package  Neu_dash
 * @copyright Copyright(c) 2020, Hansanghyeon
 * @license http://opensource.org/licenses/GPL-2.0 GNU General Public License, version 2 (GPL-2.0)
 * 
 * Plugin Name: Neu dash
 * Plugin URI: https://github.com/Hansanghyeon
 * Description: My First Plugin, Neumorphism style admin dashboard for Wordpress
 * Version: 1.0
 * Author: Hansanghyeon
 * Author URI: https://github.com/Hansanghyeon
 * License: GPL2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: block-lab
 * Domain Path: languages
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function neu_dash_admin_style() {
  wp_enqueue_style('Neu dash style', plugins_url( basename( dirname( __FILE__ ) )).'/style.css');
}
add_action('admin_enqueue_scripts', 'neu_dash_admin_style');