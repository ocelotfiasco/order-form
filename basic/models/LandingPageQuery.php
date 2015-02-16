<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * Custom query class for the LandingPage model.
 */
class LandingPageQuery extends ActiveQuery
{

	/**
	 * Only active landing page will be returned.
	 * @return LandingPageQuery
	 */
	public function active()
	{
		return $this->andWhere(['Active' => 1]);
	}

}