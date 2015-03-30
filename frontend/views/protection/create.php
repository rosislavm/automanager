<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Protection */

$this->title = 'Create Protection';
$this->params['breadcrumbs'][] = ['label' => 'Protections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="protection-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
