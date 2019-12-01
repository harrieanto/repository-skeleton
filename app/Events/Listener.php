<?php
namespace App\Events;

use Repository\Component\Contracts\Event\Listener as ListenerInterface;

/**
 * Application Event Listener.
 * 
 * @author Hariyanto - harrieanto31@yahoo.com
 * @version 1.0
 * @link  https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
abstract class Listener implements ListenerInterface
{
	/**
	 * Handle the  appropriate logic of the given event
	 * 
	 * @param \Repository\Component\Contracts\Event\Event $event
	 * 
	 * @return mixed
	 */
	abstract public function handle(Event $event);
}