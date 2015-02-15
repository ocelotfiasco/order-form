<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * Custom query class for the Grouping model.
 */
class GroupingQuery extends ActiveQuery
{

	/**
	 * Only active groupings will be returned.
	 * @return GroupingQuery
	 */
	public function active()
	{
		return $this->andWhere(['Active' => 1]);
	}

	/**
	 * Only groupings on the given landing page will be returned.
	 * @param integer $landingPageId The landing page Id
	 * @return GroupingQuery
	 */
	public function onLandingPage($landingPageId)
	{
		return $this->innerJoinWith([
			'landingPageGroupings' => function ($query) use ($landingPageId) {
				$query->where(LandingPageGrouping::tableName().'.landing_page_id = :landingPageId');
				$query->params[':landingPageId'] = $landingPageId;
			}	
		]);
	}

	/**
	 * Only groupings not on the given landing page will be returned.
	 * @param integer $landingPageId The landing page Id
	 * @return GroupingQuery
	 */
	public function notOnLandingPage($landingPageId)
	{
		return $this->
			leftJoin(LandingPageGrouping::tableName(),
				[
					'and',
					Grouping::tableName().'.id = '.LandingPageGrouping::tableName().'.grouping_id',
					'landing_page_id = :landingPageId'
				],
				[':landingPageId' => $landingPageId])->
			where([LandingPageGrouping::tableName().'.landing_page_id' => null]);
	}

}