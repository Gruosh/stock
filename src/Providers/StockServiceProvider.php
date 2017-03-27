<?php
namespace Stock\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class HelloWorldServiceProvider
 * @package HelloWorld\Providers
 */
class StockServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
		// RouteServiceProvider Klasse hier registrieren
		$this->getApplication()->register(StockRouteServiceProvider::class);
	}
}
