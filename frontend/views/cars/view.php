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
            //'car_id',
            'car_sh_id',
            'car_big_category',
            'car_year',
            'car_img:image',
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
                'value' => $model->CarEngineType->engine_type,
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
            'car_comfort',
            [
                'label' => 'Bluetooth',
                'value' => $model->carComfort->comfort_bluetooth ? 'Има' : 'Няма',
            ],
            /// i drugite
            'car_condition',
            'car_exterior',
            'car_interior',
            'car_milleage',
            'car_other_ex',
            'car_power',
            'car_protection',
            'car_safety',
            'car_town',
            'car_transmission',
        ],
    ]) ?>

</div>
