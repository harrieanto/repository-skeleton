<?php
namespace App\Http\Providers;

use Repository\Component\Support\ServiceProvider;

/**
 * Application Service Provider.
 * 
 * @package	  \App\Http\Providers
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
class AppServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * {@inheritdoc}
	 * See \Repository\Component\Support\ServiceProvider::boot()
	 */
	public function boot()
	{
		//
	}

	/**
	 * {@inheritdoc}
	 * See \Repository\Component\Support\ServiceProvider::register()
	 */
	public function register()
	{
		// Define your own provider
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

	/**
	 * Get the events that trigger this service provider to register.
	 *
	 * @return array
	 */
	public function when()
	{
		return array();
	}

	/**
	 * Determine if the provider is deferred.
	 *
	 * @return bool
	 */
	public function isDeferred()
	{
		return $this->defer;
	}
}