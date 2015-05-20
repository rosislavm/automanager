<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\User;
use yii\grid\CButtonColumn;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Моите Автомобили';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cars-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Въведи Автомобил', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'car_id',
            'car_brand',
            'car_model',
            'car_engine_type',
            'car_power',
            'car_year',
          //  'car_img:ntext',
          //  'exterior_repair',
          //  'interior_repair',
            // 'chassis_repair',
            // 'engine_repair',
            // 'other_repairs',
            // 'total_spent',
            // 'bought_for',
            // 'price_for_sale',
            // 'max_discount',
            // 'docs_available',
            // 'paid_duty',
            // 'paid_ecotax',
            // 'transit_numberplate',
            // 'fuel_paid',
            // 'car_wash',
            // 'hour_book',
            // 'disadvantages',
            // 'import_country',
            // 'has_crashed',
            // 'other_info',
            // 'car_sh_id',
            // 'car_auto_category',
            // 'car_big_category',
            // 'car_colour',
            // 'car_comfort',
            // 'car_condition',
            // 'car_exterior',
            // 'car_interior',
            // 'car_milleage',
            // 'car_other_ex',
            // 'car_protection',
            // 'car_safety',
            // 'car_town',
            // 'car_transmission',

             ['class' => 'yii\grid\ActionColumn','template' => (Yii::$app->user->identity->type == User::TYPE_OWNER ? '{view} {update} {delete}' : '{view}')],
        ],
    ]); ?>

</div>
