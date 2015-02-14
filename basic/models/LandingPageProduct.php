<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "landing_page_product".
 *
 * @property integer $landing_page_id
 * @property integer $product_id
 *
 * @property LandingPage $landingPage
 * @property Product $product
 */
class LandingPageProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'landing_page_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['landing_page_id', 'product_id'], 'required'],
            [['landing_page_id', 'product_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'landing_page_id' => 'Landing Page ID',
            'product_id' => 'Product ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLandingPage()
    {
        return $this->hasOne(LandingPage::className(), ['id' => 'landing_page_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
