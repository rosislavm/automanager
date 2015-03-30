<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Milleage */

$this->title = $model->milleage_id;
$this->params['breadcrumbs'][] = ['label' => 'Milleages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="milleage-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->milleage_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->milleage_id], [
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
            'milleage_id',
            'milleage_real',
            'milleage_current',
        ],
    ]) ?>

</div>
