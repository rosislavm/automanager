<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_comfort".
 *
 * @property string $comfort_id
 * @property integer $comfort_ass
 * @property integer $comfort_bluetooth
 * @property integer $comfort_dvd
 * @property integer $comfort_tiptronic
 * @property integer $comfort_usb
 * @property integer $comfort_air_susp
 * @property integer $comfort_keyless
 * @property integer $comfort_different
 * @property integer $comfort_bordcomp
 * @property integer $comfort_lightsens
 * @property integer $comfort_mirror
 * @property integer $comfort_windows
 * @property integer $comfort_el_susp
 * @property integer $comfort_el_seats
 * @property integer $comfort_eps
 * @property integer $comfort_climatic
 * @property integer $comfort_climatronic
 * @property integer $comfort_multi_st
 * @property integer $comfort_navigation
 * @property integer $comfort_st_heat
 * @property integer $comfort_heater
 * @property integer $comfort_fr_sc_heat
 * @property integer $comfort_seat_heat
 * @property integer $comfort_st_adjust
 * @property integer $comfort_rain_sense
 * @property integer $comfort_hydraulic
 * @property integer $comfort_light_wash
 * @property integer $comfort_cruise
 * @property integer $comfort_stereo
 * @property integer $comfort_dpf
 * @property integer $comfort_fridge
 *
 * @property Cars[] $cars
 */
class Comfort extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_comfort';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comfort_ass', 'comfort_bluetooth', 'comfort_dvd', 'comfort_tiptronic', 'comfort_usb', 'comfort_air_susp', 'comfort_keyless', 'comfort_different', 'comfort_bordcomp', 'comfort_lightsens', 'comfort_mirror', 'comfort_windows', 'comfort_el_susp', 'comfort_el_seats', 'comfort_eps', 'comfort_climatic', 'comfort_climatronic', 'comfort_multi_st', 'comfort_navigation', 'comfort_st_heat', 'comfort_heater', 'comfort_fr_sc_heat', 'comfort_seat_heat', 'comfort_st_adjust', 'comfort_rain_sense', 'comfort_hydraulic', 'comfort_light_wash', 'comfort_cruise', 'comfort_stereo', 'comfort_dpf', 'comfort_fridge'], 'required'],
            [['comfort_ass', 'comfort_bluetooth', 'comfort_dvd', 'comfort_tiptronic', 'comfort_usb', 'comfort_air_susp', 'comfort_keyless', 'comfort_different', 'comfort_bordcomp', 'comfort_lightsens', 'comfort_mirror', 'comfort_windows', 'comfort_el_susp', 'comfort_el_seats', 'comfort_eps', 'comfort_climatic', 'comfort_climatronic', 'comfort_multi_st', 'comfort_navigation', 'comfort_st_heat', 'comfort_heater', 'comfort_fr_sc_heat', 'comfort_seat_heat', 'comfort_st_adjust', 'comfort_rain_sense', 'comfort_hydraulic', 'comfort_light_wash', 'comfort_cruise', 'comfort_stereo', 'comfort_dpf', 'comfort_fridge'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comfort_id' => 'Comfort ID',
            'comfort_ass' => 'Comfort Ass',
            'comfort_bluetooth' => 'Comfort Bluetooth',
            'comfort_dvd' => 'Comfort Dvd',
            'comfort_tiptronic' => 'Comfort Tiptronic',
            'comfort_usb' => 'Comfort Usb',
            'comfort_air_susp' => 'Comfort Air Susp',
            'comfort_keyless' => 'Comfort Keyless',
            'comfort_different' => 'Comfort Different',
            'comfort_bordcomp' => 'Comfort Bordcomp',
            'comfort_lightsens' => 'Comfort Lightsens',
            'comfort_mirror' => 'Comfort Mirror',
            'comfort_windows' => 'Comfort Windows',
            'comfort_el_susp' => 'Comfort El Susp',
            'comfort_el_seats' => 'Comfort El Seats',
            'comfort_eps' => 'Comfort Eps',
            'comfort_climatic' => 'Comfort Climatic',
            'comfort_climatronic' => 'Comfort Climatronic',
            'comfort_multi_st' => 'Comfort Multi St',
            'comfort_navigation' => 'Comfort Navigation',
            'comfort_st_heat' => 'Comfort St Heat',
            'comfort_heater' => 'Comfort Heater',
            'comfort_fr_sc_heat' => 'Comfort Fr Sc Heat',
            'comfort_seat_heat' => 'Comfort Seat Heat',
            'comfort_st_adjust' => 'Comfort St Adjust',
            'comfort_rain_sense' => 'Comfort Rain Sense',
            'comfort_hydraulic' => 'Comfort Hydraulic',
            'comfort_light_wash' => 'Comfort Light Wash',
            'comfort_cruise' => 'Comfort Cruise',
            'comfort_stereo' => 'Comfort Stereo',
            'comfort_dpf' => 'Comfort Dpf',
            'comfort_fridge' => 'Comfort Fridge',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_comfort' => 'comfort_id']);
    }
}
