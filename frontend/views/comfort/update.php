<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Comfort */

$this->title = 'Update Comfort: ' . ' ' . $model->comfort_id;
$this->params['breadcrumbs'][] = ['label' => 'Comforts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->comfort_id, 'url' => ['view', 'id' => $model->comfort_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comfort-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
