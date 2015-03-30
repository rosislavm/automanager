<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Protections';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="protection-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Protection', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'protection_id',
            'protection_alarm',
            'protection_armored',
            'protection_imobilizer',
            'protection_insured',
            // 'protection_cent_lock',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
