<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Colours */

$this->title = 'Create Colours';
$this->params['breadcrumbs'][] = ['label' => 'Colours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="colours-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
