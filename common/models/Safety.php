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
            'safety_gps' => 'Safety Gps',
            'safety_traction' => 'Safety Traction',
            'safety_fr_lights' => 'Safety Fr Lights',
            'safety_abs' => 'Safety Abs',
            'safety_rear_airbag' => 'Safety Rear Airbag',
            'safety_fr_airbag' => 'Safety Fr Airbag',
            'safety_side_airbag' => 'Safety Side Airbag',
            'safety_brake' => 'Safety Brake',
            'safety_stabilize' => 'Safety Stabilize',
            'safety_tyre_pressure' => 'Safety Tyre Pressure',
            'safety_parktronic' => 'Safety Parktronic',
            'safety_dynamic' => 'Safety Dynamic',
            'safety_asr' => 'Safety Asr',
            'safety_dry_br' => 'Safety Dry Br',
            'safety_distronic' => 'Safety Distronic',
            'safety_brake_ass' => 'Safety Brake Ass',
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
