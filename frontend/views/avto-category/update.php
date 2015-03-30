<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AvtoCategory */

$this->title = 'Update Avto Category: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Avto Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="avto-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
