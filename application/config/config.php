<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Fuel
 *
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package		Fuel
 * @version		1.0
 * @author		Fuel Development Team
 * @license		MIT License
 * @copyright	2010 Dan Horrigan
 * @link		http://fuelphp.com
 */

return array(

	/**
	 * Your environment.  Can be set to any of the following:
	 *
	 * Env::TEST
	 * Env::DEVELOPMENT
	 * Env::QA
	 * Env::PRODUCTION
	 */
	'environment'	=> Env::DEVELOPMENT,

	/**
	 * index_file - The name of the main bootstrap file.
	 *
	 * Set this to FALSE or remove if you using mod_rewrite.
	 */
	'index_file'	=> 'index.php',
);

/* End of file config.php */