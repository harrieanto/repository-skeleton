<?php
namespace App\Events;

use Repository\Component\Contracts\Event\Event as EventInterface;

/**
 * Application Event.
 * 
 * @author Hariyanto - harrieanto31@yahoo.com
 * @version 1.0
 * @link  https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
abstract class Event implements EventInterface
{
	/**
	 * Define the current event name
	 * @return string The name of event this is
	 */
	abstract public function getName();
}