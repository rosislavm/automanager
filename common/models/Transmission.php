<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_transmission".
 *
 * @property string $id
 * @property string $transmission_name
 *
 * @property Cars[] $cars
 */
class Transmission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_transmission';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['transmission_name'], 'required'],
            [['transmission_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'transmission_name' => 'Скоростна кутия',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_transmission' => 'id']);
    }
}
