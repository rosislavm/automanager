<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\Showroom */

$this->title = $model->sh_name;
$this->params['breadcrumbs'][] = ['label' => 'Моите Автосалони', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="showroom-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if(Yii::$app->user->identity->type == User::TYPE_OWNER){
            echo Html::a('Обнови', ['update', 'id' => $model->sh_id], ['class' => 'btn btn-primary']);
            }
        ?>

        <?php if(Yii::$app->user->identity->type == User::TYPE_OWNER){
                echo Html::a('Изтрий', ['delete', 'id' => $model->sh_id], [
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
           // 'sh_id',
            'sh_name',
            'sh_address',
        ],
    ]) ?>
<p>
        <?= Html::a('Въведи Автомобил', ['cars/create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $carsDataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'carBrand.brand_name',
            'carModel.model_name',
            'carEngineType.engine_type',
            [
                'attribute'=> 'car_power',
                'value' => function($model, $key, $index, $column){
                    return $model->car_power.' hp';
                },
            ],
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

             ['class' => 'yii\grid\ActionColumn', 'controller' => 'cars', 'template' => (Yii::$app->user->identity->type == User::TYPE_OWNER ? '{view} {update} {delete}' : '{view}')],
        ],
    ]); ?>
</div>
