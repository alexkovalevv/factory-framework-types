<?php
	/**
	 * Factory Types
	 *
	 * Factory is an internal professional framework developed by OnePress Ltd
	 * for own needs. Please don't use it to create your own independent plugins.
	 * In future the one will be documentated and released for public.
	 *
	 * @author Paul Kashtanoff <paul@byonepress.com>
	 * @copyright (c) 2013, OnePress Ltd
	 *
	 * @package core
	 * @since 1.0.0
	 */

	if( defined('FACTORY_TYPES_000_LOADED') )
		return;
	define('FACTORY_TYPES_000_LOADED', true);

	define('FACTORY_TYPES_000_DIR', dirname(__FILE__));
	define('FACTORY_TYPES_000_URL', plugins_url(null, __FILE__));

	load_plugin_textdomain('factory_types_000', false, dirname(plugin_basename(__FILE__)) . '/langs');

	// sets version of admin interface
	if( is_admin() ) {
		if( !defined('FACTORY_FLAT_ADMIN') )
			define('FACTORY_FLAT_ADMIN', true);
	}

	#comp merge
	require(FACTORY_TYPES_000_DIR . '/types.php');
	require(FACTORY_TYPES_000_DIR . '/type.class.php');
	require(FACTORY_TYPES_000_DIR . '/includes/type-menu.class.php');
	#endcomp