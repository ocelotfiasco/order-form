<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "landing_page_grouping".
 *
 * @property integer $landing_page_id
 * @property integer $grouping_id
 *
 * @property Grouping $grouping
 * @property LandingPage $landingPage
 */
class LandingPageGrouping extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'landing_page_grouping';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['landing_page_id', 'grouping_id'], 'required'],
            [['landing_page_id', 'grouping_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'landing_page_id' => 'Landing Page ID',
            'grouping_id' => 'Grouping ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrouping()
    {
        return $this->hasOne(Grouping::className(), ['id' => 'grouping_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLandingPage()
    {
        return $this->hasOne(LandingPage::className(), ['id' => 'landing_page_id']);
    }
}
