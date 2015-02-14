<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_grouping".
 *
 * @property integer $product_id
 * @property integer $grouping_id
 *
 * @property Grouping $grouping
 * @property Product $product
 */
class ProductGrouping extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_grouping';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'grouping_id'], 'required'],
            [['product_id', 'grouping_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
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
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
