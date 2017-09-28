<?php
/*
Plugin Name: Single Page App helper
Version: 0.1
Plugin URI: petersharp.co.nz/wp/plugins/spa-helper
Description: Turn your wordpress theme or plugin into a single page app with server-side template rendering
with this library
Author: Peter Sharp
Author URI: petersharp.co.nz
*/
namespace SpaHelper;




// useful global constants
define('SPA_HELPER_VERSION', '0.0.0');
define(__NAMESPACE__.'\PLUGIN_PATH', plugin_dir_path(__FILE__));
define(__NAMESPACE__.'\PLUGIN_URL',  plugins_url('', __FILE__).'/');
define( __NAMESPACE__.'\INCLUDES_PATH',  PLUGIN_PATH.'includes/');
define(__NAMESPACE__.'\THEME_PATH', get_template_directory());

require_once PLUGIN_PATH.'loader.php';

class Plugin {
  private $compiler;
  public function __construct($compiler){
    $this->compiler = $compiler;
  }

  public function setupHooks() {
    add_action(__NAMESPACE__.'_render', [$this, 'render']);
  }

  public function render($pageData) {
    echo $this->compiler->render('index', $pageData);
  }
}

function plugin() {
  static $instance;
  if(!$instance) {
    $compiler = require_once('compiler.php');
    $instance = new Plugin($compiler);
  }
  return $instance;
}

plugin()->setupHooks();
