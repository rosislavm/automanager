<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Showroom */

$this->title = 'Създай Автосалон';
$this->params['breadcrumbs'][] = ['label' => 'Моите Автосалони', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="showroom-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'users' => $users,
    ]) ?>

</div>
