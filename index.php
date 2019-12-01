<?php
require_once __DIR__.'/bootstrap/application.php';

/**
 * Capture Incoming HTTP Request to the Application.
 *
 * @package	  \Repository\Component
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */

$servers = $app['request']->getServerParams();
$uri = parse_url($servers['REQUEST_URI'], PHP_URL_PATH);
$uri = urldecode($uri);

$allowedExtensions = array(
	'css', 'js', 'svg', 'png', 'jpg', 'jpeg', 
	'gif', 'ico', 'mp4', 'woff', 
	'ttf', 'otf', 'woff2'
);

$exists = file_exists(
	__DIR__.
	DIRECTORY_SEPARATOR.
	$uri
);

$fileinfo = pathinfo($uri);
$allowed = false;

if (array_key_exists('extension', $fileinfo)) {
  $allowed = in_array($fileinfo['extension'], $allowedExtensions);
}

if (($uri !== '/') && $exists && $allowed) {
	return false;
}

$app->make(\App\Http\Kernel::class)->handle($app['request']);