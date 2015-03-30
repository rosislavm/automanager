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
            'exterior_2doors' => 'Exterior 2doors',
            'exterior_4doors' => 'Exterior 4doors',
            'exterior_led_lights' => 'Exterior Led Lights',
            'exterior_xenon' => 'Exterior Xenon',
            'exterior_al_wheels' => 'Exterior Al Wheels',
            'exterior_methalic' => 'Exterior Methalic',
            'exterior_heat_windscr' => 'Exterior Heat Windscr',
            'exterior_panorama' => 'Exterior Panorama',
            'exterior_spoilers' => 'Exterior Spoilers',
            'exterior_toolbar' => 'Exterior Toolbar',
            'exterior_halogen_lights' => 'Exterior Halogen Lights',
            'exterior_summer_roof' => 'Exterior Summer Roof',
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
