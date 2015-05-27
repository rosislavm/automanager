<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\Cars */

$this->title = $model->car_id;
$this->params['breadcrumbs'][] = ['label' => 'Моите Автомобили', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="cars-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if(Yii::$app->user->identity->type == User::TYPE_OWNER){
            echo Html::a('Обнови', ['update', 'id' => $model->car_id], ['class' => 'btn btn-primary']);
            }
        ?>

        <?php if(Yii::$app->user->identity->type == User::TYPE_OWNER){
                echo Html::a('Изтрий', ['delete', 'id' => $model->car_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                    ],
                ]); 
            } 
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'car_id',
            'car_sh_id',
            'car_big_category',
            'car_year',
            [
                'attribute' => 'car_img',
                'value' => '<a class="fancy_image" href="'.$model->car_img.'" title="Снимка">
                                <img src="'.$model->car_img.'" width="200" alt="Снимка" />
                            </a>',
                'format' => 'html',
            ],
            'exterior_repair',
            'interior_repair',
            'chassis_repair',
            'engine_repair',
            'other_repairs',
            'total_spent',
            'bought_for',
            'price_for_sale',
            'max_discount',
            'docs_available',
            'paid_duty',
            'paid_ecotax',
            'transit_numberplate',
            'fuel_paid',
            'car_wash',
            'hour_book',
            'disadvantages',
            'import_country',
            'has_crashed',
            'other_info',
           // 'car_engine_type',
            [
                // 'label' => 'Марка:',
                'attribute' => 'car_engine_type',
                'value' => $model->carEngineType->engine_type,
            ],
            'car_auto_category',
            [
                // 'label' => 'Марка:',
                'attribute' => 'car_brand',
                'value' => $model->carBrand->brand_name,
            ],
            'car_brand',
           // 'car_model',
            [
                // 'label' => 'Марка:',
                'attribute' => 'car_model',
                'value' => $model->carModel->model_name,
            ],
            //'car_colour',
            [
                // 'label' => 'Марка:',
                'attribute' => 'car_colour',
                'value' => $model->carColour->colour_name,
            ],

//SAFETY*****Bezopasnost*****************BEGIN******************************************************
            [
                'label' => 'GPS система за проследяване',
                'value' => $model->carSafety->safety_gps ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Автоматичен контрол на стабилността',
                'value' => $model->carSafety->safety_traction ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Адаптивни предни светлини',
                'value' => $model->carSafety->safety_fr_lights ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Антиблокираща система',
                'value' => $model->carSafety->safety_abs ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Въздушни възглавници - Задни',
                'value' => $model->carSafety->safety_rear_airbag ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Въздушни възглавници - Предни',
                'value' => $model->carSafety->safety_fr_airbag ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Въздушни възглавници - Странични',
                'value' => $model->carSafety->safety_side_airbag ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Ел.разпределение на спирачното усилие',
                'value' => $model->carSafety->safety_brake ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Електронна програма за стабилизиране',
                'value' => $model->carSafety->safety_stabilize ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Контрол на налягането на гумите',
                'value' => $model->carSafety->safety_tyre_pressure ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Парктроник',
                'value' => $model->carSafety->safety_parktronic ? 'Има' : 'Няма',
            ],
                        [
                'label' => 'Система за динамична устойчивост',
                'value' => $model->carSafety->safety_dynamic ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Система за защита от пробуксуване',
                'value' => $model->carSafety->safety_asr ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Система за изсушаване на накладките',
                'value' => $model->carSafety->safety_dry_br ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Система за контрол на дистанцията',
                'value' => $model->carSafety->safety_distronic ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Система за подпомагане на спирането',
                'value' => $model->carSafety->safety_brake_ass ? 'Има' : 'Няма',
            ],
//***************************************END********************************************


//COMFORT TABLE**************************BEGIN**********************************************
            [
                'label' => 'Auto Start Stop function',
                'value' => $model->carComfort->comfort_ass ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Bluetooth/Handsfree система',
                'value' => $model->carComfort->comfort_bluetooth ? 'Има' : 'Няма',
            ],
            [
                'label' => 'DVD, TV',
                'value' => $model->carComfort->comfort_dvd ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Steptronic, Tiptronic',
                'value' => $model->carComfort->comfort_tiptronic ? 'Има' : 'Няма',
            ],
            [
                'label' => 'USB, audio\video, IN\AUX изводи',
                'value' => $model->carComfort->comfort_usb ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Адаптивно въздушно окачване',
                'value' => $model->carComfort->comfort_air_susp ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Безключово палене',
                'value' => $model->carComfort->comfort_keyless ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Блокаж на диференциала',
                'value' => $model->carComfort->comfort_different ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Бордкомпютър',
                'value' => $model->carComfort->comfort_bordcomp ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Датчик за светлина',
                'value' => $model->carComfort->comfort_lightsens ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Ел.Огледала',
                'value' => $model->carComfort->comfort_mirror ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Ел.Стъкла',
                'value' => $model->carComfort->comfort_windows ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Ел.регулиране на окачването',
                'value' => $model->carComfort->comfort_el_susp ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Ел.регулиране на седалките',
                'value' => $model->carComfort->comfort_el_seats ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Ел.усилвател на волана',
                'value' => $model->carComfort->comfort_eps ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Климатик',
                'value' => $model->carComfort->comfort_climatic ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Климатроник',
                'value' => $model->carComfort->comfort_climatronic ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Мултифункционален волан',
                'value' => $model->carComfort->comfort_multi_st ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Навигация',
                'value' => $model->carComfort->comfort_navigation ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Отопление на волана',
                'value' => $model->carComfort->comfort_st_heat ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Печка',
                'value' => $model->carComfort->comfort_heater ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Подгряване на предното стъкло',
                'value' => $model->carComfort->comfort_fr_sc_heat ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Подгряване на седалките',
                'value' => $model->carComfort->comfort_seat_heat ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Регулиране на волана',
                'value' => $model->carComfort->comfort_st_adjust ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Сензор за дъжд',
                'value' => $model->carComfort->comfort_rain_sense ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Серво усилвател на волана',
                'value' => $model->carComfort->comfort_hydraulic ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Система за измиване на фаровете',
                'value' => $model->carComfort->comfort_light_wash ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Система за контрол на скоростта',
                'value' => $model->carComfort->comfort_cruise ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Стерео уредба',
                'value' => $model->carComfort->comfort_stereo ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Филтър за твърди частици',
                'value' => $model->carComfort->comfort_dpf ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Хладилна жабка',
                'value' => $model->carComfort->comfort_fridge ? 'Има' : 'Няма',
            ],
//******************************************END************************************************

//Drugi*********Other_Extras***************BEGIN**************************************************
            [
                'label' => '4x4',
                'value' => $model->carOtherEx->other_ex_4x4 ? 'Има' : 'Няма',
            ],
            [
                'label' => '7 места',
                'value' => $model->carOtherEx->other_ex_7_seats ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Buy back',
                'value' => $model->carOtherEx->other_ex_buy_back ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Бартер',
                'value' => $model->carOtherEx->other_ex_change ? 'Да' : 'Не',
            ],
            [
                'label' => 'Газова уредба',
                'value' => $model->carOtherEx->other_ex_gas ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Капариран\Продаден',
                'value' => $model->carOtherEx->other_ex_cashed ? 'Да' : 'Не',
            ],
            [
                'label' => 'Катастрофирал',
                'value' => $model->carOtherEx->other_ex_crashed ? 'Да' : 'Не',
            ],
            [
                'label' => 'Лизинг',
                'value' => $model->carOtherEx->other_ex_leasing ? 'Да' : 'Не',
            ],
            [
                'label' => 'Метанова уредба',
                'value' => $model->carOtherEx->other_ex_methan ? 'Има' : 'Няма',
            ],
            [
                'label' => 'На части',
                'value' => $model->carOtherEx->other_ex_on_parts ? 'Да' : 'Не',
            ],
            [
                'label' => 'Напълно обслужен',
                'value' => $model->carOtherEx->other_ex_servised ? 'Да' : 'Не',
            ],
            [
                'label' => 'Нов внос',
                'value' => $model->carOtherEx->other_ex_new_import ? 'Да' : 'Не',
            ],
            [
                'label' => 'С право на дан. к-т',
                'value' => $model->carOtherEx->other_ex_tax_credit ? 'Да' : 'Не',
            ],
            [
                'label' => 'С регистрация',
                'value' => $model->carOtherEx->other_ex_registered ? 'Да' : 'Не',
            ],
            [
                'label' => 'Сервизна книжка',
                'value' => $model->carOtherEx->other_ex_service_book ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Тунинг',
                'value' => $model->carOtherEx->other_ex_tuning ? 'Има' : 'Няма',
            ],
//*****************************************END**********************************


//Exterior*********************************BEGIN*********************************
            [
                'label' => '2(3) Врати',
                'value' => $model->carExterior->exterior_2doors ? 'Има' : 'Няма',
            ],
            [
                'label' => '4(5) Врати',
                'value' => $model->carExterior->exterior_4doors ? 'Има' : 'Няма',
            ],
            [
                'label' => 'LED фарове',
                'value' => $model->carExterior->exterior_led_lights ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Ксенонови фарове',
                'value' => $model->carExterior->exterior_xenon ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Лети джанти',
                'value' => $model->carExterior->exterior_al_wheels ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Металик',
                'value' => $model->carExterior->exterior_methalic ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Отопляеми чистачки',
                'value' => $model->carExterior->exterior_heat_windscr ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Панорамен люк',
                'value' => $model->carExterior->exterior_panorama ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Спойлери',
                'value' => $model->carExterior->exterior_spoilers ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Теглич',
                'value' => $model->carExterior->exterior_toolbar ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Халогенни фарове',
                'value' => $model->carExterior->exterior_halogen_lights ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Шибедах',
                'value' => $model->carExterior->exterior_summer_roof ? 'Има' : 'Няма',
            ],

//******************************************END*********************************** 

//PROTECTION********************************BEGIN*********************************** 
            [
                'label' => 'Аларма',
                'value' => $model->carProtection->protection_alarm ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Брониран',
                'value' => $model->carProtection->protection_armored ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Имобилайзер',
                'value' => $model->carProtection->protection_imobilizer ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Каско',
                'value' => $model->carProtection->protection_insured ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Централно заключване',
                'value' => $model->carProtection->protection_cent_lock ? 'Има' : 'Няма',
            ],

//******************************************END*********************************** 

//INTERIOR**********************************BEGIN*********************************** 
            [
                'label' => 'Велурен салон',
                'value' => $model->carInterior->interior_velure ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Десен волан',
                'value' => $model->carInterior->interior_right_handdrive ? 'Има' : 'Няма',
            ],
            [
                'label' => 'Кожен салон',
                'value' => $model->carInterior->interior_leather ? 'Има' : 'Няма',
            ],

//******************************************END*********************************** 
            'car_condition',
            'car_milleage',
            'car_power',
            'car_town',
            'car_transmission',
        ],
    ]) ?>

</div>
