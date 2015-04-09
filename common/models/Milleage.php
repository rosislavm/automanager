<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_milleage".
 *
 * @property string $milleage_id
 * @property integer $milleage_real
 * @property integer $milleage_current
 *
 * @property Cars[] $cars
 */
class Milleage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_milleage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['milleage_real', 'milleage_current'], 'required'],
            [['milleage_real', 'milleage_current'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'milleage_id' => 'Milleage ID',
            'milleage_real' => 'Реален пробег в км.',
            'milleage_current' => 'Текущ пробег в км.',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_milleage' => 'milleage_id']);
    }
}
