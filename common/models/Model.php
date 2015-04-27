<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_model".
 *
 * @property string $id
 * @property string $model_name
 * @property string $brand_id
 *
 * @property Cars[] $cars
 */
class Model extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_model';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model_name', 'brand_id'], 'required'],
            [['brand_id'], 'integer'],
            [['model_name'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model_name' => 'Модел',
            'brand_id' => 'Brand ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_model' => 'id']);
    }
}
