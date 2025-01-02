<?php
if (!defined('ABSPATH')) {
  exit;
}

class Class_Init
{
  public function __construct()
  {
    add_action('admin_menu', [$this, 'vnx_register_menu']);
    add_action('wp_enqueue_scripts', [self::class, 'enqueue_frontend_assets']);
    add_action('admin_enqueue_scripts', [self::class, 'enqueue_admin_assets']);
  }
  public function vnx_register_menu()
  {
    add_menu_page(
      'Vietnix Element Options',
      'Vietnix Element Options',
      'manage_options',
      'vietnix-element-options',
      [$this, 'vietnix_element_options_page'],
      'dashicons-admin-generic',
      26
    );
  }
  public function vietnix_element_options_page()
  {
    echo '<h1>Vietnix Element Options</h1>';
    echo '<p>Hello</p>';
  }
  public static function enqueue_frontend_assets()
  {
    wp_enqueue_style('my-plugin-frontend', VNX_PLUGIN_URL . 'assets/css/frontend.css', [], VNX_PLUGIN_VERSION);
    wp_enqueue_script('my-plugin-frontend', VNX_PLUGIN_URL . 'assets/js/frontend.js', ['jquery'], VNX_PLUGIN_VERSION, true);
  }

  public static function enqueue_admin_assets()
  {
    wp_enqueue_style('my-plugin-admin', VNX_PLUGIN_URL . 'assets/css/admin.css', [], VNX_PLUGIN_VERSION);
    wp_enqueue_script('my-plugin-admin', VNX_PLUGIN_URL . 'assets/js/admin.js', ['jquery'], VNX_PLUGIN_VERSION, true);
  }
}
