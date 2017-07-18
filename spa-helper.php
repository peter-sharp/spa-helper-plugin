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

class Plugin {

  public function __construct(){
    
  }
}

function plugin() {
  static $instance;
  if(!$instance) $instance = new SpaHelper();
  return $instance;
}

plugin();
