<?php
/**
 * Namespace functions.
 *
 * @package wp-messaging
 */

namespace Souptik\WPMessaging;

// Bootstrap the plugin!
spl_autoload_register( __NAMESPACE__ . '\\autoload' );
bootstrap();

/**
 * Autoloader.
 *
 * @param  string $class
 * @return void
 */
function autoload( $class = '' ) {
	if ( 0 !== strpos( $class, __NAMESPACE__ ) ) {
		return;
	}

	$path          = SD_WP_MESSAGING_PATH . DIRECTORY_SEPARATOR . 'inc' . DIRECTORY_SEPARATOR;
	$prefix_length = strlen( __NAMESPACE__ );
	$class         = substr( $class, $prefix_length + 1 );
	$class         = strtolower( $class );
	$file          = '';
	$last_ns_pos   = strripos( $class, '\\' );

	if ( false !== $last_ns_pos ) {
		$namespace = substr( $class, 0, $last_ns_pos );
		$class     = substr( $class, $last_ns_pos + 1 );
		$file      = str_replace( '\\', DIRECTORY_SEPARATOR, $namespace ) . DIRECTORY_SEPARATOR;
	}

	$file .= 'class-' . str_replace( '_', '-', $class ) . '.php';
	$path .= $file;
	if ( file_exists( $path ) ) {
		require_once $path;
	}
}

/**
 * Bootstrap plugin.
 */
function bootstrap(): void {
	// Load different messaging service classes.
	require_once SD_WP_MESSAGING_PATH . '/inc/sms/namespace.php';

	// Admin stuff.
	add_action(
		'init',
		function () {
			Admin::get_instance()->setup();
		}
	);
}
