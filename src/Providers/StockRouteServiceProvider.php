<?php
namespace Stock\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\ApiRouter;
use Plenty\Plugin\Routing\Router;


class StockRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param ApiRouter $api
	 */
	public function map(ApiRouter $api)
	{
		$api->version(['v1'], ['middleware' => ['oauth']], function ($router)
		{
			$router->get('stock', 'Stock\Controllers\ContentController@search');
		});
	}
}
