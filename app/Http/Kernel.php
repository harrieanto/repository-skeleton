<?php
namespace App\Http;

use Repository\Component\Http\Kernel as BaseKernel;

/**
 * Http kernel
 * This class will handle requested request
 * In the same time will validate the request through defined global middleware list
 * before requested request compromised accessing our actual application
 *
 * @package	  \Repository\Component\Http
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
class Kernel extends BaseKernel
{
	/**
	 * Define you global middlewares here
	 * Doesn't support key-value pairs \Closure
	 * You have to define/wrap your middleware compromising with
	 * \Repository\Component\Contracts\Http\Middleware\MiddlewareInterface interface
	 * And bind high qualifiied middleware class name such as:
	 * \Your\Middleware\ClassName::class to the following middleware list
	 * The rules above conduct with 2(two) others middleware list, enabled and disabled
	 * @var array $middlewares
	 */
	protected $middlewares = array(
		\App\Http\Middlewares\ViewSharedMiddleware::class, 
		\App\Http\Middlewares\CsrfTokenMiddleware::class, 
		\App\Http\Middlewares\SessionMiddleware::class, 
		\App\Http\Middlewares\CheckMaintenanceMiddleware::class, 
		\App\Http\Middlewares\ValidatePostSizeMiddleware::class, 
	);
	
	protected $exceptedMiddlewares = array(
		'/v1/uploader/file' => \App\Http\Middlewares\CsrfTokenMiddleware::class, 
	);

	/**
	 * Define your enabled middlewares list here
	 * @var array $enabledMiddlewares
	 */
	protected $enabledMiddlewares = array();

	/**
	 * Define your disabled middlewares list here
	 * @var array $disabledMiddlewares
	 */
	protected $disabledMiddlewares = array();

	/**
	 * If you switch to false, It's means you disabled any middlewares
	 * @var bool $disabledMiddleware
	 */
	protected $disabledMiddleware = false;
	
	//
}