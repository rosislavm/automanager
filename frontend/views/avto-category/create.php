<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AvtoCategory */

$this->title = 'Create Avto Category';
$this->params['breadcrumbs'][] = ['label' => 'Avto Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avto-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
