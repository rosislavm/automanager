<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Interior */

$this->title = 'Create Interior';
$this->params['breadcrumbs'][] = ['label' => 'Interiors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="interior-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
