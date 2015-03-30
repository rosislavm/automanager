<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\EngineType */

$this->title = 'Update Engine Type: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Engine Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="engine-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
