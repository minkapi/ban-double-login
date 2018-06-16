<?php
/*
Plugin Name: Ban Double Login
Description: This plugin forbids double login.
Author: minkapi
version: 1.0
*/
function BDL_destroy_sessions( $logged_in_cookie, $expire, $expiration, $user_id, $logged_in, $token ) {
	$allow_capability = array();

	/**
	 * Filters the allow capabilities.
	 *
	 * @since 1.0
	 *
	 * @param array|string $allow_capability An array or capability name to allow.
	 */
	$allow_capability = apply_filters( 'BDL_allow_capability', $allow_capability );

	$allow_capability = (array)$allow_capability;

	if ( $allow_capability ) {
		$do_not_destroy = false;
		foreach ( $allow_capability as $name ) {
			if ( is_string( $name ) && user_can( $user_id, $name ) ) {
				$do_not_destroy = true;
			}
		}
	} else {
		$do_not_destroy = false;
	}

	if ( ! $do_not_destroy ) {
		$sessions = WP_Session_Tokens::get_instance( $user_id );
		$sessions->destroy_others( $token );
	}
}
add_action( 'set_logged_in_cookie', 'BDL_destroy_sessions', 10, 6 );
