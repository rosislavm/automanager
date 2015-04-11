<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_safety".
 *
 * @property string $safety_id
 * @property integer $safety_gps
 * @property integer $safety_traction
 * @property integer $safety_fr_lights
 * @property integer $safety_abs
 * @property integer $safety_rear_airbag
 * @property integer $safety_fr_airbag
 * @property integer $safety_side_airbag
 * @property integer $safety_brake
 * @property integer $safety_stabilize
 * @property integer $safety_tyre_pressure
 * @property integer $safety_parktronic
 * @property integer $safety_dynamic
 * @property integer $safety_asr
 * @property integer $safety_dry_br
 * @property integer $safety_distronic
 * @property integer $safety_brake_ass
 *
 * @property Cars[] $cars
 */
class Safety extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_safety';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['safety_gps', 'safety_traction', 'safety_fr_lights', 'safety_abs', 'safety_rear_airbag', 'safety_fr_airbag', 'safety_side_airbag', 'safety_brake', 'safety_stabilize', 'safety_tyre_pressure', 'safety_parktronic', 'safety_dynamic', 'safety_asr', 'safety_dry_br', 'safety_distronic', 'safety_brake_ass'], 'required'],
            [['safety_gps', 'safety_traction', 'safety_fr_lights', 'safety_abs', 'safety_rear_airbag', 'safety_fr_airbag', 'safety_side_airbag', 'safety_brake', 'safety_stabilize', 'safety_tyre_pressure', 'safety_parktronic', 'safety_dynamic', 'safety_asr', 'safety_dry_br', 'safety_distronic', 'safety_brake_ass'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'safety_id' => 'Safety ID',
            'safety_gps' => 'GPS система за проследяване',
            'safety_traction' => 'Автоматичен контрол на стабилността',
            'safety_fr_lights' => 'Адаптивни предни светлини',
            'safety_abs' => 'Антиблокираща система',
            'safety_rear_airbag' => 'Въздушни възглавници - Задни',
            'safety_fr_airbag' => 'Въздушни възглавници - Предни',
            'safety_side_airbag' => 'Въздушни възглавници - Странични',
            'safety_brake' => 'Ел.разпределяне на спирачното усилие',
            'safety_stabilize' => 'Електронна програма за стабилизиране',
            'safety_tyre_pressure' => 'Контрол на налягането на гумите',
            'safety_parktronic' => 'Парктроник',
            'safety_dynamic' => 'Система за динамична устойчивост',
            'safety_asr' => 'Система за защита от пробуксуване',
            'safety_dry_br' => 'Система за изсушаване на накладките',
            'safety_distronic' => 'Система за контрол на дистанцията',
            'safety_brake_ass' => 'Система за подпомагане на спирането',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_safety' => 'safety_id']);
    }
}
