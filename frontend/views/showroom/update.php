<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Showroom */

$this->title = 'Update Showroom: ' . ' ' . $model->sh_id;
$this->params['breadcrumbs'][] = ['label' => 'Showrooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sh_id, 'url' => ['view', 'id' => $model->sh_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="showroom-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'users' => $users,
    ]) ?>

</div>
