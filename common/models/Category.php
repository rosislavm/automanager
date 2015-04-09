<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_category".
 *
 * @property string $id
 * @property string $category_name
 *
 * @property AvtoCategory[] $avtoCategories
 * @property Cars[] $cars
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name'], 'required'],
            [['category_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_name' => 'Категория',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAvtoCategories()
    {
        return $this->hasMany(AvtoCategory::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_big_category' => 'id']);
    }
}
