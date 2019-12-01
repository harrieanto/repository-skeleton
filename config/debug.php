<?php

/**
 * Application debug configuration.
 * 
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
return array(
	'development' => array(
		'logger' => array(
			'path' => __DIR__."/../storage/logs/repository.log", 
		), 
		'display_error' => app_env('APP_DEBUG'), 
	), 
	'production' => array(
		'logger' => array(
			'path' => __DIR__."/../storage/logs/repository_prod.log", 
		), 
		'display_error' => app_env('APP_DEBUG'), 
	)
);