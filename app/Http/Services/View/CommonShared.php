<?php
namespace App\Http\Services\View;

use Repository\Component\Http\Middlewares\CsrfTokenChecker;
use Repository\Component\View\ViewShared as AbstractViewShared;

/**
 * Common Data Shared Variable.
 * 
 * @package	  \Repository\Component\View
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
class CommonShared extends AbstractViewShared
{
	public function registerSharedVariable()
	{
		$shareds = array(
			'csrfToken' => $this->getCsrfToken(), 
		);
		
		$this->view->withShared(array_keys($shareds), $shareds);
	}
	
	private function getCsrfToken(): string
	{
		$session = $this->app['session'];
		
		return $session->get(CsrfTokenChecker::TOKEN_INPUT_FIELD, '');
	}
}