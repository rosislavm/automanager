<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_engine_type".
 *
 * @property string $id
 * @property string $engine_type
 *
 * @property Cars[] $cars
 */
class EngineType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_engine_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['engine_type'], 'required'],
            [['engine_type'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'engine_type' => 'Тип двигател',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_engine_type' => 'id']);
    }
}
