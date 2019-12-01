<?php
namespace App\Http\Middlewares;

use Closure;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Repository\Component\Http\Response;
use Repository\Component\Http\Exception\HttpException;
use Repository\Component\Http\Middlewares\CsrfTokenChecker;
use Repository\Component\Contracts\Container\ContainerInterface;
use Repository\Component\Contracts\Http\Middleware\MiddlewareInterface;

/**
 * Check the validity of token before sending any request.
 * 
 * @package	  \Repository\Component\Session
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
class CsrfTokenMiddleware implements MiddlewareInterface
{
	/**
	 * @var \Repository\Component\Contracts\Container\ContainerInterface $app
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
		$checker = new CsrfTokenChecker($this->app['session'], $request);
		
		if (!$checker->tokenIsValid()) {
			throw new HttpException(500, "You should be specify your token before send any request");
		}

		return $next($request) ?? new Response;
	}
}