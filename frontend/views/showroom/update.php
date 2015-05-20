<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Showroom */

$this->title = 'Обнови Автосалон: ' . ' ' . $model->sh_name;
$this->params['breadcrumbs'][] = ['label' => 'Моите Автосалони', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sh_name, 'url' => ['view', 'id' => $model->sh_id]];
$this->params['breadcrumbs'][] = 'Обнови';
?>
<div class="showroom-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'users' => $users,
    ]) ?>

</div>
