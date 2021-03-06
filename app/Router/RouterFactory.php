<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList
	{
		$router = new RouteList;
		$router->addRoute('/', 'Base:App:default');
        $router->addRoute('/api/<sign>', 'Api:Json:returnResponse');
		$router->addRoute('/api/response/create', 'Api:Json:create');
		// $router->addRoute('<module>/<presenter>/<action>[/<id>]', 'Homepage:default');

		return $router;
	}
}
