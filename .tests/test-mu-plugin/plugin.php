<?php
/**
 * Plugin Name: Test MU Plugin for wp-messaging.
 *
 * This mu-plugin contains test for each service's each adapter.
 * Just un-comment the one you want to test and see it in action.
 * Please change the input values as required.
 *
 * @package wp-messaging
 */

/**
 * SMS: Default adapter Messaging.
 */
// add_action( 'init', function () {
// 	$test = \Souptik\WPMessaging\SMS\send( [ '+xxxxxxxxxxxx' ], 'Yay its working!' );
// 	echo '<h4>SMS: Default Messaging -- Triggered from `test-mu-plugin`</h4>';
// 	echo '<pre>';
// 	print_r( $test );
// 	echo '</pre>';
// 	exit();
// } );

/**
 * SMS: Twilio Messaging.
 */
// add_action( 'init', function () {
// 	$test = \Souptik\WPMessaging\SMS\send( [ '+xxxxxxxxxxxx' ], 'Yay its working!', 'twilio' );
// 	echo '<h4>SMS: Twilio Messaging -- Triggered from `test-mu-plugin`</h4>';
// 	echo '<pre>';
// 	print_r( $test );
// 	echo '</pre>';
// 	exit();
// } );

/**
 * SMS: Telesign Messaging.
 */
// add_action( 'init', function () {
// 	$test = \Souptik\WPMessaging\SMS\send( [ '+xxxxxxxxxxxx' ], 'Yay its working!', 'telesign' );
// 	echo '<h4>SMS: Telesign Messaging -- Triggered from `test-mu-plugin`</h4>';
// 	echo '<pre>';
// 	print_r( $test );
// 	echo '</pre>';
// 	exit();
// } );

/**
 * Email: Mailgun Messaging.
 */
// add_action( 'init', function () {
// 	$test = \Souptik\WPMessaging\Email\send(
// 		'Souptik',
// 		'dev1@souptik.dev',
// 		[ 'dev2@souptik.dev' ],
// 		'Yay its working!',
// 		'This is some long mail body.',
// 		'mailgun'
// 	);
// 	echo '<h4>Email: Mailgun Messaging -- Triggered from `test-mu-plugin`</h4>';
// 	echo '<pre>';
// 	print_r( $test );
// 	echo '</pre>';
// 	exit();
// } );
