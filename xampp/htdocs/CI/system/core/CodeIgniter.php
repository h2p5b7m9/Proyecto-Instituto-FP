<?php
//Buscar Debug Mío
//Buscar Ejecuta controlador solicitado
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2018, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-001";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * System Initialization File
 *
 * Loads the base classes and executes the request.
 *
 * @package		CodeIgniter
 * @subpackage	CodeIgniter
 * @category	Front-controller
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/
 */

/**
 * CodeIgniter Version
 *
 * @var	string
 *
 */
	const CI_VERSION = '3.1.9';

/*
 * ------------------------------------------------------
 *  Load the framework constants
 * ------------------------------------------------------
 */
	if (file_exists(APPPATH.'config/'.ENVIRONMENT.'/constants.php'))
	{
		require_once(APPPATH.'config/'.ENVIRONMENT.'/constants.php');
	}

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-002";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	if (file_exists(APPPATH.'config/constants.php'))
	{
		require_once(APPPATH.'config/constants.php');
	}

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-003";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Load the global functions
 * ------------------------------------------------------
 */
	require_once(BASEPATH.'core/Common.php');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-004";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 * Security procedures
 * ------------------------------------------------------
 */

if ( ! is_php('5.4'))
{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-005";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	ini_set('magic_quotes_runtime', 0);

	if ((bool) ini_get('register_globals'))
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-006";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		$_protected = array(
			'_SERVER',
			'_GET',
			'_POST',
			'_FILES',
			'_REQUEST',
			'_SESSION',
			'_ENV',
			'_COOKIE',
			'GLOBALS',
			'HTTP_RAW_POST_DATA',
			'system_path',
			'application_folder',
			'view_folder',
			'_protected',
			'_registered'
		);

		$_registered = ini_get('variables_order');
		foreach (array('E' => '_ENV', 'G' => '_GET', 'P' => '_POST', 'C' => '_COOKIE', 'S' => '_SERVER') as $key => $superglobal)
		{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-007";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

			if (strpos($_registered, $key) === FALSE)
			{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-008";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

				continue;
			}

			foreach (array_keys($$superglobal) as $var)
			{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-009";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

				if (isset($GLOBALS[$var]) && ! in_array($var, $_protected, TRUE))
				{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-010";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

					$GLOBALS[$var] = NULL;
				}
			}
		}
	}
}

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-011";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto


/*
 * ------------------------------------------------------
 *  Define a custom error handler so we can log PHP errors
 * ------------------------------------------------------
 */
	set_error_handler('_error_handler');
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-012";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	set_exception_handler('_exception_handler');
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-013";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	register_shutdown_function('_shutdown_handler');
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-014";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto


/*
 * ------------------------------------------------------
 *  Set the subclass_prefix
 * ------------------------------------------------------
 *
 * Normally the "subclass_prefix" is set in the config file.
 * The subclass prefix allows CI to know if a core class is
 * being extended via a library in the local application
 * "libraries" folder. Since CI allows config items to be
 * overridden via data set in the main index.php file,
 * before proceeding we need to know if a subclass_prefix
 * override exists. If so, we will set this value now,
 * before any classes are loaded
 * Note: Since the config file data is cached it doesn't
 * hurt to load it here.
 */
	if ( ! empty($assign_to_config['subclass_prefix']))
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-015";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		get_config(array('subclass_prefix' => $assign_to_config['subclass_prefix']));
	}

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-016";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Should we use a Composer autoloader?
 * ------------------------------------------------------
 */
	if ($composer_autoload = config_item('composer_autoload'))
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-017";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		if ($composer_autoload === TRUE)
		{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-018";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

			file_exists(APPPATH.'vendor/autoload.php')
				? require_once(APPPATH.'vendor/autoload.php')
				: log_message('error', '$config[\'composer_autoload\'] is set to TRUE but '.APPPATH.'vendor/autoload.php was not found.');
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-019";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		}
		elseif (file_exists($composer_autoload))
		{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-020";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

			require_once($composer_autoload);
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-021";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		}
		else
		{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-022";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

			log_message('error', 'Could not find the specified $config[\'composer_autoload\'] path: '.$composer_autoload);
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-023";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		}
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-024";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	}

/*
 * ------------------------------------------------------
 *  Start the timer... tick tock tick tock...
 * ------------------------------------------------------
 */
	$BM =& load_class('Benchmark', 'core'); //Buscar function &load_class( en Common.php
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-025";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	$BM->mark('total_execution_time_start'); // Buscar public function mark( en Benchmark.php ; mark es un metodo de class CI_Benchmark
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-026";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	$BM->mark('loading_time:_base_classes_start');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-027";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Instantiate the hooks class
 * ------------------------------------------------------
 */
	$EXT =& load_class('Hooks', 'core');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-028";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Is there a "pre_system" hook?
 * ------------------------------------------------------
 */
	$EXT->call_hook('pre_system');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-029";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Instantiate the config class
 * ------------------------------------------------------
 *
 * Note: It is important that Config is loaded first as
 * most other classes depend on it either directly or by
 * depending on another class that uses it.
 *
 */
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-030";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	$CFG =& load_class('Config', 'core');

	// Do we have any manually set config items in the index.php file?
	if (isset($assign_to_config) && is_array($assign_to_config))
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-031";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		foreach ($assign_to_config as $key => $value)
		{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-032";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

			$CFG->set_item($key, $value);
		}
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-033";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	}

/*
 * ------------------------------------------------------
 * Important charset-related stuff
 * ------------------------------------------------------
 *
 * Configure mbstring and/or iconv if they are enabled
 * and set MB_ENABLED and ICONV_ENABLED constants, so
 * that we don't repeatedly do extension_loaded() or
 * function_exists() calls.
 *
 * Note: UTF-8 class depends on this. It used to be done
 * in it's constructor, but it's _not_ class-specific.
 *
 */
	$charset = strtoupper(config_item('charset'));
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-034";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	ini_set('default_charset', $charset);

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-035";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	if (extension_loaded('mbstring'))
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-036";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		define('MB_ENABLED', TRUE);
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-037";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		// mbstring.internal_encoding is deprecated starting with PHP 5.6
		// and it's usage triggers E_DEPRECATED messages.
		@ini_set('mbstring.internal_encoding', $charset);
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-038";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		// This is required for mb_convert_encoding() to strip invalid characters.
		// That's utilized by CI_Utf8, but it's also done for consistency with iconv.
		mb_substitute_character('none');
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-039";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	}
	else
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-040";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		define('MB_ENABLED', FALSE);
	}

	// There's an ICONV_IMPL constant, but the PHP manual says that using
	// iconv's predefined constants is "strongly discouraged".
	if (extension_loaded('iconv'))
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-041";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		define('ICONV_ENABLED', TRUE);
		// iconv.internal_encoding is deprecated starting with PHP 5.6
		// and it's usage triggers E_DEPRECATED messages.
		@ini_set('iconv.internal_encoding', $charset);
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-042";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	}
	else
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-043";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		define('ICONV_ENABLED', FALSE);
	}

	if (is_php('5.6'))
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-044";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		ini_set('php.internal_encoding', $charset);
	}

/*
 * ------------------------------------------------------
 *  Load compatibility features
 * ------------------------------------------------------
 */
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-045";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto


	require_once(BASEPATH.'core/compat/mbstring.php');
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-046";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	require_once(BASEPATH.'core/compat/hash.php');
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-047";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	require_once(BASEPATH.'core/compat/password.php');
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-048";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	require_once(BASEPATH.'core/compat/standard.php');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-049";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Instantiate the UTF-8 class
 * ------------------------------------------------------
 */
	$UNI =& load_class('Utf8', 'core');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-050";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Instantiate the URI class
 * ------------------------------------------------------
 */
	$URI =& load_class('URI', 'core');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-051";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Instantiate the routing class and set the routing
 * ------------------------------------------------------
 */
	$RTR =& load_class('Router', 'core', isset($routing) ? $routing : NULL);

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-052";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Instantiate the output class
 * ------------------------------------------------------
 */
	$OUT =& load_class('Output', 'core');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-053";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *	Is there a valid cache file? If so, we're done...
 * ------------------------------------------------------
 */
	if ($EXT->call_hook('cache_override') === FALSE && $OUT->_display_cache($CFG, $URI) === TRUE)
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-054";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		exit;
	}

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-055";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * -----------------------------------------------------
 * Load the security class for xss and csrf support
 * -----------------------------------------------------
 */
	$SEC =& load_class('Security', 'core');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-056";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Load the Input class and sanitize globals
 * ------------------------------------------------------
 */
	$IN	=& load_class('Input', 'core');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-057";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Load the Language class
 * ------------------------------------------------------
 */
	$LANG =& load_class('Lang', 'core');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-058";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Load the app controller and local controller
 * ------------------------------------------------------
 *
 */
	// Load the base controller class
	require_once BASEPATH.'core/Controller.php';

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-059";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	/**
	 * Reference to the CI_Controller method.
	 *
	 * Returns current CI instance object
	 *
	 * @return CI_Controller
	 */
	function &get_instance()
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-060";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		return CI_Controller::get_instance();
	}

	if (file_exists(APPPATH.'core/'.$CFG->config['subclass_prefix'].'Controller.php'))
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-061";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		require_once APPPATH.'core/'.$CFG->config['subclass_prefix'].'Controller.php';
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-062";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	}

	// Set a mark point for benchmarking
	$BM->mark('loading_time:_base_classes_end');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-063";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Sanity checks
 * ------------------------------------------------------
 *
 *  The Router class has already validated the request,
 *  leaving us with 3 options here:
 *
 *	1) an empty class name, if we reached the default
 *	   controller, but it didn't exist;
 *	2) a query string which doesn't go through a
 *	   file_exists() check
 *	3) a regular request for a non-existing page
 *
 *  We handle all of these as a 404 error.
 *
 *  Furthermore, none of the methods in the app controller
 *  or the loader class can be called via the URI, nor can
 *  controller methods that begin with an underscore.
 */

	$e404 = FALSE;
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-064";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	$class = ucfirst($RTR->class);
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-065";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	$method = $RTR->method;

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-066";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	if (empty($class) OR ! file_exists(APPPATH.'controllers/'.$RTR->directory.$class.'.php'))
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-067";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		$e404 = TRUE;
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-068";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	}
	else
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-069";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		require_once(APPPATH.'controllers/'.$RTR->directory.$class.'.php');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-070";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		if ( ! class_exists($class, FALSE) OR $method[0] === '_' OR method_exists('CI_Controller', $method))
		{
			$e404 = TRUE;
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-071";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		}
		elseif (method_exists($class, '_remap'))
		{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-072";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

			$params = array($method, array_slice($URI->rsegments, 2));
			$method = '_remap';
		}
		elseif ( ! method_exists($class, $method))
		{
			$e404 = TRUE;
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-073";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		}
		/**
		 * DO NOT CHANGE THIS, NOTHING ELSE WORKS!
		 *
		 * - method_exists() returns true for non-public methods, which passes the previous elseif
		 * - is_callable() returns false for PHP 4-style constructors, even if there's a __construct()
		 * - method_exists($class, '__construct') won't work because CI_Controller::__construct() is inherited
		 * - People will only complain if this doesn't work, even though it is documented that it shouldn't.
		 *
		 * ReflectionMethod::isConstructor() is the ONLY reliable check,
		 * knowing which method will be executed as a constructor.
		 */
		elseif ( ! is_callable(array($class, $method)))
		{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-074";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

			$reflection = new ReflectionMethod($class, $method);
			if ( ! $reflection->isPublic() OR $reflection->isConstructor())
			{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-0075";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

				$e404 = TRUE;
			}
		}
	}

	if ($e404)
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-076";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		if ( ! empty($RTR->routes['404_override']))
		{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-077";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

			if (sscanf($RTR->routes['404_override'], '%[^/]/%s', $error_class, $error_method) !== 2)
			{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-078";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

				$error_method = 'index';
			}

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-079";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

			$error_class = ucfirst($error_class);

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-080";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

			if ( ! class_exists($error_class, FALSE))
			{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-081";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

				if (file_exists(APPPATH.'controllers/'.$RTR->directory.$error_class.'.php'))
				{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-082";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

					require_once(APPPATH.'controllers/'.$RTR->directory.$error_class.'.php');
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-083";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

					$e404 = ! class_exists($error_class, FALSE);
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-084";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

				}
				// Were we in a directory? If so, check for a global override
				elseif ( ! empty($RTR->directory) && file_exists(APPPATH.'controllers/'.$error_class.'.php'))
				{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-085";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

					require_once(APPPATH.'controllers/'.$error_class.'.php');
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-0086";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

					if (($e404 = ! class_exists($error_class, FALSE)) === FALSE)
					{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-087";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

						$RTR->directory = '';
					}
				}
			}
			else
			{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-088";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

				$e404 = FALSE;
			}
		}

		// Did we reset the $e404 flag? If so, set the rsegments, starting from index 1
		if ( ! $e404)
		{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-089";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

			$class = $error_class;
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-090";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

			$method = $error_method;

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-091";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

			$URI->rsegments = array(
				1 => $class,
				2 => $method
			);
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-092";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		}
		else
		{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-093";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

			show_404($RTR->directory.$class.'/'.$method);
		}
	}

	if ($method !== '_remap')
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-094";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		$params = array_slice($URI->rsegments, 2);
	}

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-095";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Is there a "pre_controller" hook?
 * ------------------------------------------------------
 */
	$EXT->call_hook('pre_controller');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-096 - Ejecuta controlador solicitado";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Instantiate the requested controller - Ejecuta controlador solicitado
 * ------------------------------------------------------
 */
	// Mark a start point so we can benchmark the controller
	$BM->mark('controller_execution_time_( '.$class.' / '.$method.' )_start');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-097";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	$CI = new $class();

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-098";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Is there a "post_controller_constructor" hook?
 * ------------------------------------------------------
 */
	$EXT->call_hook('post_controller_constructor');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-099";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Call the requested method
 * ------------------------------------------------------
 */
	call_user_func_array(array(&$CI, $method), $params);

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-100";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

	// Mark a benchmark end point
	$BM->mark('controller_execution_time_( '.$class.' / '.$method.' )_end');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-101";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Is there a "post_controller" hook?
 * ------------------------------------------------------
 */
	$EXT->call_hook('post_controller');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-102";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Send the final rendered output to the browser
 * ------------------------------------------------------
 */
	if ($EXT->call_hook('display_override') === FALSE)
	{
   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-103";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

		$OUT->_display();
	}

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-104";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto

/*
 * ------------------------------------------------------
 *  Is there a "post_system" hook?
 * ------------------------------------------------------
 */
	$EXT->call_hook('post_system');

   //Debug Mío
   $fichero = "Debug.txt"; //Pongo el nombre del fichero a abrir escribir en una variable
   $fp = fopen($fichero, "a");
   $lin_debug = "CodeIgniter.php-105";
   fputs($fp, $lin_debug);
   fputs($fp, "\n");
   fclose($fp); //Cierra identificador del fichero abierto
