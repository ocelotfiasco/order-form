<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "landing_page".
 *
 * @property integer $id
 * @property integer $active
 * @property integer $created
 * @property string $description
 * @property integer $modified
 * @property string $name
 * @property string $title
 *
 * @property Grouping[] $groupings
 * @property LandingPageGrouping[] $landingPageGroupings
 * @property LandingPageProduct[] $landingPageProducts
 * @property Product[] $products
 */
class LandingPage extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     * @return LandingPageQuery
     */
    public static function find()
    {
        return new LandingPageQuery(get_called_class());
    }

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
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'active' => 'Active',
            'created' => 'Created',
            'description' => 'Description',
            'modified' => 'Modified',
            'name' => 'Name',
            'title' => 'Title',
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
    public function getGroupings()
    {
        return $this->hasMany(Grouping::className(), ['id' => 'grouping_id'])->viaTable('landing_page_grouping', ['landing_page_id' => 'id']);
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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'title', 'description', 'active'], 'required'],
            [['description'], 'string'],
            [['active'], 'integer'],
            [['name'], 'string', 'max' => 128],
            [['title'], 'string', 'max' => 256]
        ];
    }

}