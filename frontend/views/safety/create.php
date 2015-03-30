<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Safety */

$this->title = 'Create Safety';
$this->params['breadcrumbs'][] = ['label' => 'Safeties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="safety-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
