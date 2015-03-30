<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Safeties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="safety-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Safety', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'safety_id',
            'safety_gps',
            'safety_traction',
            'safety_fr_lights',
            'safety_abs',
            // 'safety_rear_airbag',
            // 'safety_fr_airbag',
            // 'safety_side_airbag',
            // 'safety_brake',
            // 'safety_stabilize',
            // 'safety_tyre_pressure',
            // 'safety_parktronic',
            // 'safety_dynamic',
            // 'safety_asr',
            // 'safety_dry_br',
            // 'safety_distronic',
            // 'safety_brake_ass',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
