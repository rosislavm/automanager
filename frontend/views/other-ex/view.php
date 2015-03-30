<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\OtherEx */

$this->title = $model->other_ex_id;
$this->params['breadcrumbs'][] = ['label' => 'Other Exes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="other-ex-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->other_ex_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->other_ex_id], [
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
            'other_ex_id',
            'other_ex_4x4',
            'other_ex_7_seats',
            'other_ex_buy_back',
            'other_ex_change',
            'other_ex_gas',
            'other_ex_cashed',
            'other_ex_crashed',
            'other_ex_leasing',
            'other_ex_methan',
            'other_ex_on_parts',
            'other_ex_servised',
            'other_ex_new_import',
            'other_ex_tax_credit',
            'other_ex_registered',
            'other_ex_service_book',
            'other_ex_tuning',
        ],
    ]) ?>

</div>
