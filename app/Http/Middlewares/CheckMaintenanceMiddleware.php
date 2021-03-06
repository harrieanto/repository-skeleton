<?php
namespace App\Http\Middlewares;

use Closure;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Repository\Component\Http\Response;
use Repository\Component\Http\Exception\HttpException;
use Repository\Component\Contracts\Container\ContainerInterface;
use Repository\Component\Contracts\Http\Middleware\MiddlewareInterface;

/**
 * Check for Maintenance Middleware.
 * 
 * @package	  \Repository\Component\Session
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
class CheckMaintenanceMiddleware implements MiddlewareInterface
{
	/**
	 * @var \Repository\Component\Contracts\Container\ContainerInterface
	 */
	private $app;
	
	/**
	 * @param \Repository\Component\Contracts\Container\ContainerInterface
	 */
	public function __construct(ContainerInterface $app)
	{
		$this->app = $app;
	}
	
	/**
	 * {@inheritdoc}
	 * See \Repository\Component\Contracts\Http\Middleware\MiddlewareInterface
	 */
	public function handle(RequestInterface $request, Closure $next): ResponseInterface
	{
		if ($this->app['config']['application']['down']) {
			throw new HttpException(503, "Down for scheduled maintenance!");
		}
		
		return $next($request) ?? new Response;
	}
}