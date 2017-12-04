<?php

/**
 * Plugin Name: Mitch's Gutenblocks
 * Plugin URI: https://github.com/WordPress/mitch-gutenblocks
 * Description: Mitch's playground for creating new blocks for Gutenberg.
 * Version: 1.0.0.0
 * Author: Mitch Canter
 * Author URI: https://www.mitchcanter.com
 *
 * @package mitch-gutenblocks
 */

 /** Defining Constants **/
 define( 'CD_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
 define( 'CD_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

 /** Separating Files **/
 require_once ( CD_PLUGIN_PATH . 'blocks/sample-block/sample-block.php');
