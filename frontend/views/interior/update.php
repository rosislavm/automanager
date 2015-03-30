<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Interior */

$this->title = 'Update Interior: ' . ' ' . $model->interior_id;
$this->params['breadcrumbs'][] = ['label' => 'Interiors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->interior_id, 'url' => ['view', 'id' => $model->interior_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="interior-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
