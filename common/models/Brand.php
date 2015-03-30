<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_brand".
 *
 * @property string $id
 * @property string $brand_name
 * @property integer $category_id
 *
 * @property Cars[] $cars
 */
class Brand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_brand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_name', 'category_id'], 'required'],
            [['category_id'], 'integer'],
            [['brand_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_name' => 'Brand Name',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_brand' => 'id']);
    }
}
