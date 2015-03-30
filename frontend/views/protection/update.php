<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Protection */

$this->title = 'Update Protection: ' . ' ' . $model->protection_id;
$this->params['breadcrumbs'][] = ['label' => 'Protections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->protection_id, 'url' => ['view', 'id' => $model->protection_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="protection-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
