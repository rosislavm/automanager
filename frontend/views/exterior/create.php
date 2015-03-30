<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Exterior */

$this->title = 'Create Exterior';
$this->params['breadcrumbs'][] = ['label' => 'Exteriors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exterior-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
