<?php
namespace App\Http\Middlewares;

use Closure;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Repository\Component\Http\Response;
use Repository\Component\Http\Exception\HttpException;
use Repository\Component\Contracts\Container\ContainerInterface;
use Repository\Component\Contracts\Http\Middleware\MiddlewareInterface as IMiddleware;

/**
 * Only Authenticated User Middleware.
 * 
 * @package	  \Repository\Component\Session
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
class OnlyAuthenticatedUserMiddleware implements IMiddleware
{
	public function __construct(ContainerInterface $app)
	{
		$this->app = $app;
	}

	public function handle(RequestInterface $request, Closure $next): ResponseInterface
	{
		if (!$this->app['session']->has('signed_credential')) {
			throw new HttpException(403, "Access Forbidden!");
		}

		return $next($request) ?? new Response;
	}
}