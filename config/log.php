<?php
/**
 * Application logger configuration.
 * 
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
$env = app_env('APP_ENV');

return array(
	'channel' => 'stream', 
	'storage' => app_config('debug')[$env]['logger']['path'], 
);