<?php
namespace Stock\Controllers;

use Plenty\Modules\Item\DataLayer\Contracts\ItemDataLayerRepositoryContract;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Item\DataLayer\Models;


class ContentController extends Controller
{

	public function search()
	{
		$list = [];

		$itemDataLayerRepositoryContract = pluginApp(ItemDataLayerRepositoryContract::class);

		$resultFields = [
			'itemBase' => [
				'id'
			],
			'variationBase' => [
				'id'
			],
			'variationStock' => [
				'params' => [
					'type' => 'virtual'
				],
				'fields' => [
					'stockNet',
					'stockPhysical',
					'reservedStock',
					'reordered'
				]
			]
		];

		$variationList = $itemDataLayerRepositoryContract->search($resultFields);

		foreach($variationList as $variation)
		{
			$list[$variation->itemBase->id] = [
				'itemid' => $variation->itemBase->id,
				'variationId' => $variation->variationBase->id,
				'stockPhysical' => $variation->variationStock->stockPhysical,
				'reservedStock' =>$variation->variationStock->reservedStock,
				'stockNet' => $variation->variationStock->stockNet,
				'reordered' =>$variation->variationStock->reordered,
			];
		}

		return $list;
	}
}
