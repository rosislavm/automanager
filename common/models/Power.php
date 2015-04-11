<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_power".
 *
 * @property string $power_id
 * @property string $power_value
 *
 * @property Cars[] $cars
 */
class Power extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_power';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['power_value'], 'required'],
            [['power_value'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'power_id' => 'Power ID',
            'power_value' => 'Мощност (к.с.)',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_power' => 'power_id']);
    }
}
