<?php
/**
 * @package phpbb.json
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

// Set the gears in motion
include ('bootstrap.php');

// Grab a request object
$request = new \phpBBJSON\Request($_REQUEST);

// And a verification object
$verify = new \phpBBJSON\Verify($request);

// And let the module take care of it
$module = new \phpBBJSON\Module($request, $verify, $phpbb);
$module->route();