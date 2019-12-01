<?php

/**
 * Application Encryption configuration.
 * 
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
return array(
	'type' => 'openssl', 
	'key' => app_env('APP_KEY'), 
	'cipher' => 'AES-256-CBC', 
);