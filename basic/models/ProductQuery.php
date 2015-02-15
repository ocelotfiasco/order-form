<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * Custom query class for the product model.
 */
class ProductQuery extends ActiveQuery
{

	/**
	 * Only active products will be returned.
	 * @return ProductQuery
	 */
	public function active()
	{
		return $this->andWhere(['Active' => 1]);
	}

	/**
	 * Only products in the given group will be returned.
	 * @param integer $groupingId The grouping Id
	 * @return ProductQuery
	 */
	public function inGrouping($groupingId)
	{
		return $this->innerJoinWith([
			'productGroupings' => function ($query) use ($groupingId) {
				$query->where(ProductGrouping::tableName().'.grouping_id = :groupingId');
				$query->params[':groupingId'] = $groupingId;
			}	
		]);
	}

	/**
	 * Only products not in the given group will be returned.
	 * @param integer $groupingId The grouping Id
	 * @return ProductQuery
	 */
	public function notInGrouping($groupingId)
	{
		return $this->
			leftJoin(ProductGrouping::tableName(),
				[
					'and',
					Product::tableName().'.id = '.ProductGrouping::tableName().'.product_id',
					'grouping_id = :groupingId'
				],
				[':groupingId' => $groupingId])->
			where([ProductGrouping::tableName().'.grouping_id' => null]);
	}

}