<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Exterior */

$this->title = 'Update Exterior: ' . ' ' . $model->exterior_id;
$this->params['breadcrumbs'][] = ['label' => 'Exteriors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->exterior_id, 'url' => ['view', 'id' => $model->exterior_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exterior-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
