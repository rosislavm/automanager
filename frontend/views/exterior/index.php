<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Exteriors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exterior-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Exterior', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'exterior_id',
            'exterior_2doors',
            'exterior_4doors',
            'exterior_led_lights',
            'exterior_xenon',
            // 'exterior_al_wheels',
            // 'exterior_methalic',
            // 'exterior_heat_windscr',
            // 'exterior_panorama',
            // 'exterior_spoilers',
            // 'exterior_toolbar',
            // 'exterior_halogen_lights',
            // 'exterior_summer_roof',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
