<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property integer $active
 * @property integer $created
 * @property integer $modified
 *
 * @property LandingPageProduct[] $landingPageProducts
 * @property LandingPage[] $landingPages
 * @property OrderProduct[] $orderProducts
 * @property OrderHeader[] $orders
 * @property ProductGrouping[] $productGroupings
 * @property Grouping[] $groupings
 */
class Product extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     * @return ProductQuery
     */
    public static function find()
    {
        return new ProductQuery(get_called_class());
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'active'], 'required'],
            [['active'], 'integer'],
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

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'created',
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'modified',
                ],
                'value' => new Expression('UNIX_TIMESTAMP()'),
            ],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLandingPageProducts()
    {
        return $this->hasMany(LandingPageProduct::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLandingPages()
    {
        return $this->hasMany(LandingPage::className(), ['id' => 'landing_page_id'])->viaTable('landing_page_product', ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderProducts()
    {
        return $this->hasMany(OrderProduct::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(OrderHeader::className(), ['id' => 'order_id'])->viaTable('order_product', ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductGroupings()
    {
        return $this->hasMany(ProductGrouping::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroupings()
    {
        return $this->hasMany(Grouping::className(), ['id' => 'grouping_id'])->viaTable('product_grouping', ['product_id' => 'id']);
    }
}
