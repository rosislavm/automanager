<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_other_ex".
 *
 * @property string $other_ex_id
 * @property integer $other_ex_4x4
 * @property integer $other_ex_7_seats
 * @property integer $other_ex_buy_back
 * @property integer $other_ex_change
 * @property integer $other_ex_gas
 * @property integer $other_ex_cashed
 * @property integer $other_ex_crashed
 * @property integer $other_ex_leasing
 * @property integer $other_ex_methan
 * @property integer $other_ex_on_parts
 * @property integer $other_ex_servised
 * @property integer $other_ex_new_import
 * @property integer $other_ex_tax_credit
 * @property integer $other_ex_registered
 * @property integer $other_ex_service_book
 * @property integer $other_ex_tuning
 *
 * @property Cars[] $cars
 */
class OtherEx extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_other_ex';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['other_ex_4x4', 'other_ex_7_seats', 'other_ex_buy_back', 'other_ex_change', 'other_ex_gas', 'other_ex_cashed', 'other_ex_crashed', 'other_ex_leasing', 'other_ex_methan', 'other_ex_on_parts', 'other_ex_servised', 'other_ex_new_import', 'other_ex_tax_credit', 'other_ex_registered', 'other_ex_service_book', 'other_ex_tuning'], 'required'],
            [['other_ex_4x4', 'other_ex_7_seats', 'other_ex_buy_back', 'other_ex_change', 'other_ex_gas', 'other_ex_cashed', 'other_ex_crashed', 'other_ex_leasing', 'other_ex_methan', 'other_ex_on_parts', 'other_ex_servised', 'other_ex_new_import', 'other_ex_tax_credit', 'other_ex_registered', 'other_ex_service_book', 'other_ex_tuning'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'other_ex_id' => 'Other Ex ID',
            'other_ex_4x4' => 'Other Ex 4x4',
            'other_ex_7_seats' => 'Other Ex 7 Seats',
            'other_ex_buy_back' => 'Other Ex Buy Back',
            'other_ex_change' => 'Other Ex Change',
            'other_ex_gas' => 'Other Ex Gas',
            'other_ex_cashed' => 'Other Ex Cashed',
            'other_ex_crashed' => 'Other Ex Crashed',
            'other_ex_leasing' => 'Other Ex Leasing',
            'other_ex_methan' => 'Other Ex Methan',
            'other_ex_on_parts' => 'Other Ex On Parts',
            'other_ex_servised' => 'Other Ex Servised',
            'other_ex_new_import' => 'Other Ex New Import',
            'other_ex_tax_credit' => 'Other Ex Tax Credit',
            'other_ex_registered' => 'Other Ex Registered',
            'other_ex_service_book' => 'Other Ex Service Book',
            'other_ex_tuning' => 'Other Ex Tuning',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_other_ex' => 'other_ex_id']);
    }
}
