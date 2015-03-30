<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Exterior */

$this->title = $model->exterior_id;
$this->params['breadcrumbs'][] = ['label' => 'Exteriors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exterior-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->exterior_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->exterior_id], [
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
            'exterior_id',
            'exterior_2doors',
            'exterior_4doors',
            'exterior_led_lights',
            'exterior_xenon',
            'exterior_al_wheels',
            'exterior_methalic',
            'exterior_heat_windscr',
            'exterior_panorama',
            'exterior_spoilers',
            'exterior_toolbar',
            'exterior_halogen_lights',
            'exterior_summer_roof',
        ],
    ]) ?>

</div>
