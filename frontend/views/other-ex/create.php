<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\OtherEx */

$this->title = 'Create Other Ex';
$this->params['breadcrumbs'][] = ['label' => 'Other Exes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="other-ex-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
