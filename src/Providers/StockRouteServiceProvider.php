<?php
namespace Stock\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\ApiRouter;
use Plenty\Plugin\Routing\Router;


class StockRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
  	{
      // der 1. parameter gehört zum URL aufruf über postman zb
      // der 2. param ist der Pfad zur Klasse/Methode die aufgerufen werden soll
      // beim 2. Param fängt man immer mit dem "namespace" an (der muss genau glecih geschrieben werden, in deinem fall hier S von stock groß)
      // das nach dem @ ist die methode, die stimmt hier
      /**
       * @param ApiRouter $api
       */
       public function map(ApiRouter $api)
       {
           $api->version(['v1'], ['middleware' => ['oauth']], function ($router)
           {
               // bin begeistert:D jetzt musst plugin updaten, also im system
               $router->get('stock', 'Stock\Controllers\ContentController@search');
           });
        }
    }
}
