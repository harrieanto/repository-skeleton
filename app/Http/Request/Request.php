<?php
namespace App\Http\Request;

use Repository\Component\Http\Request as HttpRequest;
use Repository\Component\Validation\Rule;

/**
 * Application Http Request Extender.
 * 
 * @package	  \App\Http\Providers
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
class Request extends HttpRequest
{
	/**
	 * Define the default of validation rules
	 * 
	 * @param \Repository\Component\Validation\Rule $rule
	 *  
	 * @return void
	 */
	public static function rules(Rule $rule)
	{
		$rule->setRule(function($rule) {
			$pattern = $rule->getDefaultRules();
			
			return $pattern;
		});
	}

	/**
	 * Define the default of validatio nalert/error messages
	 * 
	 * @param \Repository\Component\Validation\Rule $rule
	 *  
	 * @return void
	 */
	public static function alerts(Rule $rule)
	{
		$rule->setAlertMessage(function($rule) {
			return [];
		});
	}
}