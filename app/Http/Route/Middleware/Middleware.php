<?php
use Repository\Component\Http\Request;

/**
 * Middleware Route.
 * 
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */

/**
 * Only authenticated user can access dashboard pages
 * -------------------------------------------------------------
 * Here the example you can setup middleware as you needs
 * The following example is how to deport unauthenticated
 * user that trying to access each dashbaord page with the help
 * of setting up regular expression .* wildcard and any method
 */ 
$this->middleware(
	Request::$httpMethods, 
	'test/:all', 
	"App\Http\Middlewares\OnlyAuthenticatedUserMiddleware"
)->expression(':all', '.*[^login]');
