<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Showroom */

$this->title = $model->sh_id;
$this->params['breadcrumbs'][] = ['label' => 'Showrooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="showroom-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->sh_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->sh_id], [
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
            'sh_id',
            'sh_name',
            'sh_address',
            'sh_user_id',
        ],
    ]) ?>

</div>
