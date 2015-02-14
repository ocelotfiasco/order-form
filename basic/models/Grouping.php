<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grouping".
 *
 * @property integer $id
 * @property string $name
 * @property integer $active
 * @property integer $created
 * @property integer $modified
 *
 * @property LandingPageGrouping[] $landingPageGroupings
 * @property LandingPage[] $landingPages
 * @property ProductGrouping[] $productGroupings
 * @property Product[] $products
 */
class Grouping extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grouping';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'active', 'created'], 'required'],
            [['active', 'created', 'modified'], 'integer'],
            [['name'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'active' => 'Active',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLandingPageGroupings()
    {
        return $this->hasMany(LandingPageGrouping::className(), ['grouping_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLandingPages()
    {
        return $this->hasMany(LandingPage::className(), ['id' => 'landing_page_id'])->viaTable('landing_page_grouping', ['grouping_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductGroupings()
    {
        return $this->hasMany(ProductGrouping::className(), ['grouping_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['id' => 'product_id'])->viaTable('product_grouping', ['grouping_id' => 'id']);
    }
}
