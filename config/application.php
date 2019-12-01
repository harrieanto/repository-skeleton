<?php
/**
 * Application framework configuration.
 * 
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
return [
	'down' => false, 
	'timezone'	=> 'Asia/Jakarta', 
	'aliases'	=> [
		'Event' => \Repository\Component\Event\Dispatcher::class, 
		'Flash' => \Repository\Component\Session\Flash::class, 
		'Html' => \Repository\Component\Html\Html::class, 
		'Image' => \Repository\Component\Support\Image::class, 
		'Request' => \Repository\Component\Http\Request::class, 
		'Response' => \Repository\Component\Http\Response::class, 
		'Redirect' => \Repository\Component\Http\ResponseRedirect::class, 
		'Session' => \Repository\Component\Session\Session::class, 
		'View' => \Repository\Component\View\View::class, 
	], 
	'providers' => [
		\App\Http\Providers\AppServiceProvider::class, 
		\Repository\Component\Cache\CacheServiceProvider::class, 
		\Repository\Component\Encryption\EncryptionServiceProvider::class, 
		\Repository\Component\Hashing\HashServiceProvider::class, 
		\Repository\Component\Html\HtmlServiceProvider::class,
		\Repository\Component\Http\HttpServiceProvider::class, 
		\Repository\Component\Session\SessionServiceProvider::class, 
		\Repository\Component\Pagination\PaginationServiceProvider::class, 
		\Repository\Component\Validation\ValidationServiceProvider::class, 
		\Repository\Component\View\ViewServiceProvider::class, 
		\StaticMark\Providers\AppServiceProvider::class, 
	], 
	'manifest'    => 'app/Cache', 
];
