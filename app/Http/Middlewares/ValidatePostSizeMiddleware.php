<?php
namespace App\Http\Middlewares;

use Closure;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Repository\Component\Http\Response;
use Repository\Component\Contracts\Container\ContainerInterface;
use Repository\Component\Contracts\Http\Middleware\MiddlewareInterface;
use Repository\Component\Http\Middlewares\PostSizeValidator;
use Repository\Component\Http\Middlewares\Exception\PostTooLargeException;

/**
 * Validate Post Size Middleware.
 * 
 * @package	  \Repository\Component\Session
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
class ValidatePostSizeMiddleware implements MiddlewareInterface
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
		$postValidator = new PostSizeValidator($request);
		
		if (!$postValidator->validate()) {
			$ex = "The post size exceeded allowed post size.";
			throw new PostTooLargeException($ex);
		}
		
		return $next($request) ?? new Response;
	}
}