<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comforts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comfort-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Comfort', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'comfort_id',
            'comfort_ass',
            'comfort_bluetooth',
            'comfort_dvd',
            'comfort_tiptronic',
            // 'comfort_usb',
            // 'comfort_air_susp',
            // 'comfort_keyless',
            // 'comfort_different',
            // 'comfort_bordcomp',
            // 'comfort_lightsens',
            // 'comfort_mirror',
            // 'comfort_windows',
            // 'comfort_el_susp',
            // 'comfort_el_seats',
            // 'comfort_eps',
            // 'comfort_climatic',
            // 'comfort_climatronic',
            // 'comfort_multi_st',
            // 'comfort_navigation',
            // 'comfort_st_heat',
            // 'comfort_heater',
            // 'comfort_fr_sc_heat',
            // 'comfort_seat_heat',
            // 'comfort_st_adjust',
            // 'comfort_rain_sense',
            // 'comfort_hydraulic',
            // 'comfort_light_wash',
            // 'comfort_cruise',
            // 'comfort_stereo',
            // 'comfort_dpf',
            // 'comfort_fridge',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
