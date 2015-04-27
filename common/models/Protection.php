<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_protection".
 *
 * @property string $protection_id
 * @property integer $protection_alarm
 * @property integer $protection_armored
 * @property integer $protection_imobilizer
 * @property integer $protection_insured
 * @property integer $protection_cent_lock
 *
 * @property Cars[] $cars
 */
class Protection extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_protection';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['protection_alarm', 'protection_armored', 'protection_imobilizer', 'protection_insured', 'protection_cent_lock'], 'required'],
            [['protection_alarm', 'protection_armored', 'protection_imobilizer', 'protection_insured', 'protection_cent_lock'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'protection_id' => 'Protection ID',
            'protection_alarm' => 'Аларма',
            'protection_armored' => 'Брониран',
            'protection_imobilizer' => 'Имобилайзер',
            'protection_insured' => 'Каско',
            'protection_cent_lock' => 'Централно заключване',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_protection' => 'protection_id']);
    }
}
