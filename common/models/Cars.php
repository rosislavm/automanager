<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_cars".
 *
 * @property string $car_id
 * @property string $car_year
 * @property string $car_img
 * @property string $exterior_repair
 * @property string $interior_repair
 * @property string $chassis_repair
 * @property string $engine_repair
 * @property string $other_repairs
 * @property double $total_spent
 * @property double $bought_for
 * @property double $price_for_sale
 * @property double $max_discount
 * @property string $docs_available
 * @property double $paid_duty
 * @property double $paid_ecotax
 * @property double $transit_numberplate
 * @property double $fuel_paid
 * @property double $car_wash
 * @property string $hour_book
 * @property string $disadvantages
 * @property string $import_country
 * @property string $has_crashed
 * @property string $other_info
 * @property string $car_sh_id
 * @property string $car_engine_type
 * @property string $car_auto_category
 * @property string $car_brand
 * @property string $car_big_category
 * @property string $car_colour
 * @property string $car_comfort
 * @property integer $car_condition
 * @property string $car_exterior
 * @property string $car_interior
 * @property string $car_milleage
 * @property string $car_model
 * @property string $car_other_ex
 * @property string $car_power
 * @property string $car_protection
 * @property string $car_safety
 * @property string $car_town
 * @property string $car_transmission
 *
 * @property AvtoCategory $carAutoCategory
 * @property Category $carBigCategory
 * @property Brand $carBrand
 * @property Colours $carColour
 * @property Comfort $carComfort
 * @property Condition $carCondition
 * @property EngineType $carEngineType
 * @property Exterior $carExterior
 * @property Interior $carInterior
 * @property Milleage $carMilleage
 * @property Model $carModel
 * @property OtherEx $carOtherEx
 * @property Power $carPower
 * @property Protection $carProtection
 * @property Safety $carSafety
 * @property Showroom $carSh
 * @property Town $carTown
 * @property Transmission $carTransmission
 */
class Cars extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_cars';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_year', 'exterior_repair', 'interior_repair', 'chassis_repair', 'engine_repair', 'other_repairs', 'total_spent', 'bought_for', 'price_for_sale', 'max_discount', 'docs_available', 'paid_duty', 'paid_ecotax', 'transit_numberplate', 'fuel_paid', 'car_wash', 'hour_book', 'disadvantages', 'import_country', 'has_crashed', 'other_info', 'car_sh_id', 'car_engine_type', 'car_auto_category', 'car_brand', 'car_big_category', 'car_colour', 'car_comfort', 'car_condition', 'car_exterior', 'car_interior', 'car_milleage', 'car_model', 'car_other_ex', 'car_power', 'car_protection', 'car_safety', 'car_town', 'car_transmission'], 'required'],
            [['car_img'], 'string'],
            [['image'], 'file'/*,'extensions' => 'gif, jpg, png, jpeg'*/],
            [['total_spent', 'bought_for', 'price_for_sale', 'max_discount', 'paid_duty', 'paid_ecotax', 'transit_numberplate', 'fuel_paid', 'car_wash'], 'number'],
            [['car_sh_id', 'car_engine_type', 'car_auto_category', 'car_brand', 'car_big_category', 'car_colour', 'car_comfort', 'car_condition', 'car_exterior', 'car_interior', 'car_milleage', 'car_model', 'car_other_ex', 'car_power', 'car_protection', 'car_safety', 'car_town', 'car_transmission'], 'integer'],
            [['car_year'], 'string', 'max' => 10],
            [['exterior_repair', 'interior_repair', 'chassis_repair', 'engine_repair', 'other_repairs', 'docs_available', 'hour_book', 'disadvantages', 'has_crashed', 'other_info'], 'string', 'max' => 250],
            [['import_country'], 'string', 'max' => 80]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [ 
            'car_id' => 'Car ID',
            'car_year' => 'Година на производство:',
            'car_img' => 'Снимка',
            'exterior_repair' => 'Ремонти по екстериор:',
            'interior_repair' => 'Ремонти по интериор:',
            'chassis_repair' => 'Ремонти по ходова част:',
            'engine_repair' => 'Ремонти по двигател:',
            'other_repairs' => 'Други ремонти:',
            'total_spent' => 'Общо похарчена сума за автомобила:',
            'bought_for' => 'Закупен за:',
            'price_for_sale' => 'Продажна цена:',
            'max_discount' => 'Маскимална отстъпка:',
            'docs_available' => 'Налични документи:',
            'paid_duty' => 'Платено мито:',
            'paid_ecotax' => 'Платена ЕКО такса:',
            'transit_numberplate' => 'Транзитни номера:',
            'fuel_paid' => 'Заредено гориво:',
            'car_wash' => 'Освежаване на автомобила:',
            'hour_book' => 'Час за оглед:',
            'disadvantages' => 'Недостатъци и проблеми:',
            'import_country' => 'Страна на внос:',
            'has_crashed' => 'Блъскан:',
            'other_info' => 'Друга информация:',
            'car_sh_id' => 'Автосалон:',
            'car_engine_type' => 'Тип двигател:',
            'car_auto_category' => 'Категория:',
            'car_brand' => 'Марка:',
            'car_big_category' => 'Основна категория:',
            'car_colour' => 'Цвят:',
            'car_comfort' => 'Комфорт:',
            'car_condition' => 'Състояние:',
            'car_exterior' => 'Екстериор:',
            'car_interior' => 'Интериор:',
            'car_milleage' => 'Пробег в км.:',
            'car_model' => 'Модел:',
            'car_other_ex' => 'Други екстри:',
            'car_power' => 'Мощност:',
            'car_protection' => 'Защита:',
            'car_safety' => 'Безопасност:',
            'car_town' => 'Регион:',
            'car_transmission' => 'Скоростна кутия:',
        ];
    }

    /**fvtgb
     * @return \yii\db\ActiveQuery
     */
    public function getCarAutoCategory()
    {
        return $this->hasOne(AvtoCategory::className(), ['id' => 'car_auto_category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarBigCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'car_big_category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'car_brand']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarColour()
    {
        return $this->hasOne(Colours::className(), ['colour_id' => 'car_colour']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarComfort()
    {
        return $this->hasOne(Comfort::className(), ['comfort_id' => 'car_comfort']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarCondition()
    {
        return $this->hasOne(Condition::className(), ['id' => 'car_condition']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarEngineType()
    {
        return $this->hasOne(EngineType::className(), ['id' => 'car_engine_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarExterior()
    {
        return $this->hasOne(Exterior::className(), ['exterior_id' => 'car_exterior']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarInterior()
    {
        return $this->hasOne(Interior::className(), ['interior_id' => 'car_interior']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarMilleage()
    {
        return $this->hasOne(Milleage::className(), ['milleage_id' => 'car_milleage']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarModel()
    {
        return $this->hasOne(Model::className(), ['id' => 'car_model']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarOtherEx()
    {
        return $this->hasOne(OtherEx::className(), ['other_ex_id' => 'car_other_ex']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarPower()
    {
        return $this->hasOne(Power::className(), ['power_id' => 'car_power']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarProtection()
    {
        return $this->hasOne(Protection::className(), ['protection_id' => 'car_protection']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarSafety()
    {
        return $this->hasOne(Safety::className(), ['safety_id' => 'car_safety']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarSh()
    {
        return $this->hasOne(Showroom::className(), ['sh_id' => 'car_sh_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserShowrooms()
    {
        return $this->hasOne(UserShowroom::className(), ['id_showroom' => 'car_sh_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarTown()
    {
        return $this->hasOne(Town::className(), ['id' => 'car_town']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarTransmission()
    {
        return $this->hasOne(Transmission::className(), ['id' => 'car_transmission']);
    }

    
}
