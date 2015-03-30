<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Power */

$this->title = 'Update Power: ' . ' ' . $model->power_id;
$this->params['breadcrumbs'][] = ['label' => 'Powers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->power_id, 'url' => ['view', 'id' => $model->power_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="power-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
