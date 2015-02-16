<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "order_header".
 *
 * @property integer $id
 * @property string $address_1
 * @property string $address_2
 * @property string $address_3
 * @property string $city
 * @property integer $country_id
 * @property integer $created
 * @property string $first_name
 * @property string $last_name
 * @property string $postal
 * @property string $state
 *
 * @property Country $country
 * @property OrderProduct[] $orderProducts
 * @property Product[] $products
 */
class Order extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_header';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address_1' => 'Address 1',
            'address_2' => 'Address 2',
            'address_3' => 'Address 3',
            'city' => 'City',
            'country_id' => 'Country ID',
            'created' => 'Created',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'postal' => 'Postal',
            'state' => 'State',
        ];
    }

    /**
     * Add timestamp behavior.
     * @return Array behaviors
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'created',
                ],
                'value' => new Expression('UNIX_TIMESTAMP()'),
            ],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderProducts()
    {
        return $this->hasMany(OrderProduct::className(), ['order_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['id' => 'product_id'])->viaTable('order_product', ['order_id' => 'id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'address_1', 'city', 'state', 'postal', 'country_id'], 'required'],
            [['country_id'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 64],
            [['address_1', 'address_2', 'address_3', 'city', 'state'], 'string', 'max' => 128],
            [['postal'], 'string', 'max' => 16],
            [['address_2', 'address_3'], 'default', 'value' => null]
        ];
    }

}