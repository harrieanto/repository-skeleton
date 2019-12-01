<?php
/**
 * Application session configuration.
 * 
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
return array(
	// Default storage driver is file
	// Notice: Just now support file storage only
	'driver' => 'file', 

	// The lifetime of your session cookie
	// The default 0 is until you close the browser you've used
	// To setup your cookie lifetime similiar with plain PHP session
	// I.e. time()+120 //Setup lifetime for 2(two) minute
	'lifetime' => 0, 
	
	// Determine if the session data encrypted or not
	'encrypted' => false, 
	
	// Session storage to save session file
	'pathfile' => __DIR__.'/../storage/framework/sessions', 

	// The prefix used for your session handler
	'prefix' => 'repository_', 

	// The table name anytime you want switch to database storage
	'table' => 'sessions', 

	// The default cookie name
	'cookie_name' => 'REPOSITORY', 

	// The default cookie domain name
	// Please note when you try run in the localhost:port manner
	// With cookie domain `.localhost`
	// Your cookie will not setup properly especially over the mobile browser
	// You need something called virtual host that specify your domain
	// Like devmode.com and specify cookie domain in the following below such as:
	// `.devmode.com`
	'domain' => '', 

	// The default cookie path
	'path_of_cookie' => '/', 

	// If you set true then your cookie is available in the secure protocol
	// false that is depict that your cookie available in the http only
	'secure' => false, 
);