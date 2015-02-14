<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "landing_page".
 *
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $description
 * @property integer $active
 * @property integer $created
 * @property integer $modified
 *
 * @property LandingPageGrouping[] $landingPageGroupings
 * @property Grouping[] $groupings
 * @property LandingPageProduct[] $landingPageProducts
 * @property Product[] $products
 */
class LandingPage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'landing_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'title', 'description', 'active', 'created'], 'required'],
            [['description'], 'string'],
            [['active', 'created', 'modified'], 'integer'],
            [['name'], 'string', 'max' => 128],
            [['title'], 'string', 'max' => 256]
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
            'title' => 'Title',
            'description' => 'Description',
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
        return $this->hasMany(LandingPageGrouping::className(), ['landing_page_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroupings()
    {
        return $this->hasMany(Grouping::className(), ['id' => 'grouping_id'])->viaTable('landing_page_grouping', ['landing_page_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLandingPageProducts()
    {
        return $this->hasMany(LandingPageProduct::className(), ['landing_page_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['id' => 'product_id'])->viaTable('landing_page_product', ['landing_page_id' => 'id']);
    }
}
