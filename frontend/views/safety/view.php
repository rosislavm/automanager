<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Safety */

$this->title = $model->safety_id;
$this->params['breadcrumbs'][] = ['label' => 'Safeties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="safety-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->safety_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->safety_id], [
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
            'safety_id',
            'safety_gps',
            'safety_traction',
            'safety_fr_lights',
            'safety_abs',
            'safety_rear_airbag',
            'safety_fr_airbag',
            'safety_side_airbag',
            'safety_brake',
            'safety_stabilize',
            'safety_tyre_pressure',
            'safety_parktronic',
            'safety_dynamic',
            'safety_asr',
            'safety_dry_br',
            'safety_distronic',
            'safety_brake_ass',
        ],
    ]) ?>

</div>
