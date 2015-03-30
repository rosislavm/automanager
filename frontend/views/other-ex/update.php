<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OtherEx */

$this->title = 'Update Other Ex: ' . ' ' . $model->other_ex_id;
$this->params['breadcrumbs'][] = ['label' => 'Other Exes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->other_ex_id, 'url' => ['view', 'id' => $model->other_ex_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="other-ex-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
