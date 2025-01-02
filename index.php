<?php
/*
Plugin Name: Vietnix Element Options
Plugin URI: #
Description: Plugin thêm các option cho các element theo yêu cầu.
Version: 1.0
Author: Vietnix
Author URI: #
Text Domain: vietnix-element-option
Domain Path: /languages
*/
if (!defined('ABSPATH')) {
    exit;
}

// Định nghĩa các hằng số
define('VNX_PLUGIN_VERSION', '1.0');
define('VNX_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('VNX_PLUGIN_URL', plugin_dir_url(__FILE__));

// Tải file chính
require_once VNX_PLUGIN_DIR . 'includes/class-init.php';
// Khởi tạo plugin
new Class_Init;
