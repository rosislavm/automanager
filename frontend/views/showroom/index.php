<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\User;
use yii\grid\CButtonColumn;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Моите Автосалони';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="showroom-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Създай Автосалон', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'sh_id',
            'sh_name',
            'sh_address',

            ['class' => 'yii\grid\ActionColumn','template' => (Yii::$app->user->identity->type == User::TYPE_OWNER ? '{view} {update} {delete}' : '{view}')],

        ],

        
    ]); ?>

</div>
