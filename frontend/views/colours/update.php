<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Colours */

$this->title = 'Update Colours: ' . ' ' . $model->colour_id;
$this->params['breadcrumbs'][] = ['label' => 'Colours', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->colour_id, 'url' => ['view', 'id' => $model->colour_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="colours-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
