<?php
namespace App\Http\Services\View;

use Repository\Component\View\View as ExtendedView;

/**
 * View Shared Handler.
 * 
 * @package	  \Repository\Component\View
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
class View extends ExtendedView
{
	public function basepath()
	{
		//Here you can change your default(resources) view basepath
		//to your own
	}
	
	public function registerShared(array $shareds = array())
	{
		//Note.
		//This defined shared variable only spreaded to the view target
		//in the current same class context.
		//So. You need to use `\App\Http\Services\View\View` class to be able to use shared variable
		//spreaded to the whole variety of view handler
		//If you want to shared variable accessed from the global view app
		//You need register shared view variable to the global middleware
		//Please bear in mind, when you registering shared variable to the global middleware
		//you may loss some credential data of your sharred variable
		//as we know the global middleware is triggered for the first time when the app is not ready at all
		$shareds = array(
			\App\Http\Services\View\CommonShared::class, 
		);

		parent::registerShared($shareds);
	}
}