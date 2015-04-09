<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_condition".
 *
 * @property integer $id
 * @property string $condition_name
 *
 * @property Cars[] $cars
 */
class Condition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_condition';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['condition_name'], 'required'],
            [['condition_name'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'condition_name' => 'Състояние:',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_condition' => 'id']);
    }
}
