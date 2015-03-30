<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Power */

$this->title = 'Create Power';
$this->params['breadcrumbs'][] = ['label' => 'Powers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="power-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
