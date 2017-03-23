<?php
namespace Stock\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\StockManagement\Stock\Models


class ContentController extends Controller
{

	public function showAllArticle()
	{
		$list = [];

		$stockRepo = pluginApp(Stock::class);

		$stockList = $stockRepo->toArray();

		foreach($stocklist->getResult() as $stock)
		{
			$list[$stock->id] = [
				'itemid' => $stock->itemid,
				'variationid' => $stock->variationid,
				'stockPhysical' => $stock->stockPhysical,
				'reservedStock' =>$stock->reservedStock,
				'stockNet' => $stock->stockNet,
				'reordered' =>$stock->reordered,
			];
		}

		return $list;
	}
}
