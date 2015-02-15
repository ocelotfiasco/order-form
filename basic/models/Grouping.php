<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "grouping".
 *
 * @property integer $id
 * @property integer $active
 * @property integer $created
 * @property integer $modified
 * @property string $name
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
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'active' => 'Active',
            'created' => 'Created',
            'modified' => 'Modified',
            'name' => 'Name',
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
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'modified',
                ],
                'value' => new Expression('UNIX_TIMESTAMP()'),
            ],
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

}