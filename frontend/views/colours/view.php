<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Colours */

$this->title = $model->colour_id;
$this->params['breadcrumbs'][] = ['label' => 'Colours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="colours-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->colour_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->colour_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'colour_id',
            'colour_name',
        ],
    ]) ?>

</div>
