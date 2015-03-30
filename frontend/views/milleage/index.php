<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Milleages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="milleage-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Milleage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'milleage_id',
            'milleage_real',
            'milleage_current',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
