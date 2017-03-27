<?php
namespace Stock\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\ApiRouter;
use Plenty\Plugin\Routing\Router;


class StockRouteServiceProvider extends RouteServiceProvider
{
  public function map(Router $router)
  	{
  		$router->get('stock', 'stock\Controllers\ContentController@search');
  	}
}
