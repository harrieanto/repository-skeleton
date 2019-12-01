<?php
/**
 * Bootstrap Application Features.
 *
 * @package	  \Repository\Component
 * @author    Hariyanto - harrieanto31@yahoo.com
 * @version   1.0
 * @link      https://www.bandd.web.id
 * @copyright Copyright (C) 2019 Hariyanto
 * @license   https://github.com/harrieanto/repository/blob/master/LICENSE.md
 */
require_once __DIR__."/../vendor/repository/framework/Bootstrappers/Autoloaders/Autoload.php";

use Repository\Component\Bootstrappers\BootstrapFactory;
use Repository\Component\Bootstrappers\Autoloaders\Autoload;

define('LS', '\\');
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH',  realpath(__DIR__.'/..'));
define('CONFIG_ROOT_PATH', realpath(__DIR__.'/../config'));

$autoload = new Autoload(ROOT_PATH);
$autoload->addNamespace('Repository\Component', ROOT_PATH . '/vendor/repository/framework');
$autoload->addNamespace('StaticMark', ROOT_PATH . '/StaticMark');
$app = new BootstrapFactory;
$app = $app->bootstrap();

return $app;
