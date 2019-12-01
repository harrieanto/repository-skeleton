<?php
namespace App\Http\Middlewares;

use Closure;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Repository\Component\Http\Response;
use Repository\Component\Session\SessionFactory;
use Repository\Component\Contracts\Container\ContainerInterface;
use Repository\Component\Contracts\Http\Middleware\MiddlewareInterface;

/**
 * Session Middleware.
 * 
 * @package	  \Repository\Component\Session
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
class SessionMiddleware implements MiddlewareInterface
{
	/**
	 * @var \Repository\Component\Contracts\Container\ContainerInterface
	 */
	private $app;

	/**
	 * @var \Repository\Component\Contracts\Sessioon\SessionInterface
	 */
	private $session;
	
	/**
	 * @param \Repository\Component\Contracts\Container\ContainerInterface
	 */
	public function __construct(ContainerInterface $app)
	{
		$this->session = $app[SessionFactory::class];
	}
	
	/**
	 * {@inheritdoc}
	 * See \Repository\Component\Contracts\Http\Middleware\MiddlewareInterface
	 */
	public function handle(RequestInterface $request, Closure $next): ResponseInterface
	{
		$this->session->startSession();

		$response = $next($request);

		$this->session->writeSession();

		return $response ?? new Response;
	}
}