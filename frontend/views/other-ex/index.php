<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Other Exes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="other-ex-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Other Ex', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'other_ex_id',
            'other_ex_4x4',
            'other_ex_7_seats',
            'other_ex_buy_back',
            'other_ex_change',
            // 'other_ex_gas',
            // 'other_ex_cashed',
            // 'other_ex_crashed',
            // 'other_ex_leasing',
            // 'other_ex_methan',
            // 'other_ex_on_parts',
            // 'other_ex_servised',
            // 'other_ex_new_import',
            // 'other_ex_tax_credit',
            // 'other_ex_registered',
            // 'other_ex_service_book',
            // 'other_ex_tuning',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
