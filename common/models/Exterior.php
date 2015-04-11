<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_exterior".
 *
 * @property string $exterior_id
 * @property integer $exterior_2doors
 * @property integer $exterior_4doors
 * @property integer $exterior_led_lights
 * @property integer $exterior_xenon
 * @property integer $exterior_al_wheels
 * @property integer $exterior_methalic
 * @property integer $exterior_heat_windscr
 * @property integer $exterior_panorama
 * @property integer $exterior_spoilers
 * @property integer $exterior_toolbar
 * @property integer $exterior_halogen_lights
 * @property integer $exterior_summer_roof
 *
 * @property Cars[] $cars
 */
class Exterior extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_exterior';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['exterior_2doors', 'exterior_4doors', 'exterior_led_lights', 'exterior_xenon', 'exterior_al_wheels', 'exterior_methalic', 'exterior_heat_windscr', 'exterior_panorama', 'exterior_spoilers', 'exterior_toolbar', 'exterior_halogen_lights', 'exterior_summer_roof'], 'required'],
            [['exterior_2doors', 'exterior_4doors', 'exterior_led_lights', 'exterior_xenon', 'exterior_al_wheels', 'exterior_methalic', 'exterior_heat_windscr', 'exterior_panorama', 'exterior_spoilers', 'exterior_toolbar', 'exterior_halogen_lights', 'exterior_summer_roof'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'exterior_id' => 'Exterior ID',
            'exterior_2doors' => '2(3) Врати',
            'exterior_4doors' => '4(5) Врати',
            'exterior_led_lights' => 'LED фарове',
            'exterior_xenon' => 'Ксенонови фарове',
            'exterior_al_wheels' => 'Лети джанти',
            'exterior_methalic' => 'Металик',
            'exterior_heat_windscr' => 'Отопляеми чистачки',
            'exterior_panorama' => 'Панорамен люк',
            'exterior_spoilers' => 'Спойлери',
            'exterior_toolbar' => 'Теглич',
            'exterior_halogen_lights' => 'Халогенни фарове',
            'exterior_summer_roof' => 'Шибедах',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_exterior' => 'exterior_id']);
    }
}
