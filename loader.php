<?php

namespace SpaHelper;

if(file_exists(PLUGIN_PATH.'vendor/autoload.php')) {
	require_once(PLUGIN_PATH.'vendor/autoload.php');
} else {
	function composer_deps_not_installed_notice() {
		$class = 'notice notice-error';
		$message = __( 'Single Page App Helper composer dependencies not installed.', 'spa-helper' );

		printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) );
	}
	add_action( 'admin_notices', __NAMESPACE__.'\composer_deps_not_installed_notice' );
}
