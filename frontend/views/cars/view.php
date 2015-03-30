<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Cars */

$this->title = $model->car_id;
$this->params['breadcrumbs'][] = ['label' => 'Cars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cars-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->car_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->car_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'car_id',
            'car_year',
            'car_img:ntext',
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
            'car_sh_id',
            'car_engine_type',
            'car_auto_category',
            'car_brand',
            'car_big_category',
            'car_colour',
            'car_comfort',
            'car_condition',
            'car_exterior',
            'car_interior',
            'car_milleage',
            'car_model',
            'car_other_ex',
            'car_power',
            'car_protection',
            'car_safety',
            'car_town',
            'car_transmission',
        ],
    ]) ?>

</div>
