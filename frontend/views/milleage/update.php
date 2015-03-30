<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Milleage */

$this->title = 'Update Milleage: ' . ' ' . $model->milleage_id;
$this->params['breadcrumbs'][] = ['label' => 'Milleages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->milleage_id, 'url' => ['view', 'id' => $model->milleage_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="milleage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
