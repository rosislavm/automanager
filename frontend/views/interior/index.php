<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Interiors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="interior-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Interior', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'interior_id',
            'interior_velure',
            'interior_right_handdrive',
            'interior_leather',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
