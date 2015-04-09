<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_avto_category".
 *
 * @property string $id
 * @property string $avto_category
 * @property string $category_id
 *
 * @property Category $category
 * @property Cars[] $cars
 */
class AvtoCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_avto_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['avto_category', 'category_id'], 'required'],
            [['category_id'], 'integer'],
            [['avto_category'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'avto_category' => 'Основна категория',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_auto_category' => 'id']);
    }
}
