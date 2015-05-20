<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Cars */

$this->title = 'Обнови Автомобили: ' . ' ' . $model->car_id;
$this->params['breadcrumbs'][] = ['label' => 'Моите Автомобили', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->car_id, 'url' => ['view', 'id' => $model->car_id]];
$this->params['breadcrumbs'][] = 'Обнови';
?>
<div class="cars-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
