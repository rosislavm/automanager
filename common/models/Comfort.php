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
            'comfort_ass' => 'Auto Start Stop function',
            'comfort_bluetooth' => 'Bluetooth \ handsfree система',
            'comfort_dvd' => 'DVD, TV',
            'comfort_tiptronic' => 'Steptronic, Tiptronic',
            'comfort_usb' => 'USB, audio\video, IN\AUX изводи',
            'comfort_air_susp' => 'Адаптивно въздушно окачване',
            'comfort_keyless' => 'Безключово палене',
            'comfort_different' => 'Блокаж на диференциала',
            'comfort_bordcomp' => 'Бордкомпютър',
            'comfort_lightsens' => 'Датчик за светлина',
            'comfort_mirror' => 'Ел. Огледала',
            'comfort_windows' => 'Ел. Стъкла',
            'comfort_el_susp' => 'Ел. регулиране на окачването',
            'comfort_el_seats' => 'Ел. регулиране на седалките',
            'comfort_eps' => 'Ел. усилвател на волана',
            'comfort_climatic' => 'Климатик',
            'comfort_climatronic' => 'Климатроник',
            'comfort_multi_st' => 'Мултифункционален волан',
            'comfort_navigation' => 'Навигация',
            'comfort_st_heat' => 'Отопление на волана',
            'comfort_heater' => 'Печка',
            'comfort_fr_sc_heat' => 'Подгряване на предното стъкло',
            'comfort_seat_heat' => 'Подгряване на седалките',
            'comfort_st_adjust' => 'Регулиране на волана',
            'comfort_rain_sense' => 'Сензор за дъжд',
            'comfort_hydraulic' => 'Серво усилвател на волана',
            'comfort_light_wash' => 'Система за измиване на фаровете',
            'comfort_cruise' => 'Автопилот',
            'comfort_stereo' => 'Стерео уредба',
            'comfort_dpf' => 'Филтър за твърди частици',
            'comfort_fridge' => 'Хладилна жабка',
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
