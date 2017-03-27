<?php
namespace Stock\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Item\DataLayer\Models;


class ContentController extends Controller
{

	public function search()
	{
		$list = [];

		$itemDataLayerRepositoryContract = pluginApp(ItemDataLayerRepositoryContract::class);

		// Methode von plentymarkets angeben, welche vom Repo gezogen werden soll.
		$stockList = $itemDataLayerRepositoryContract->search();

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
