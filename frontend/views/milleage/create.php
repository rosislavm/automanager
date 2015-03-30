<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Milleage */

$this->title = 'Create Milleage';
$this->params['breadcrumbs'][] = ['label' => 'Milleages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="milleage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
