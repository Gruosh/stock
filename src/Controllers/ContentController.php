<?php
namespace Stock\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Item\DataLayer\Models;


class ContentController extends Controller
{

	public function showAllArticle()
	{
		$list = [];

		$stockModel = pluginApp(VariationStock::class);

		$stockList = $stockModel->toArray();

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
