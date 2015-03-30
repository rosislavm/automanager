<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Comfort */

$this->title = $model->comfort_id;
$this->params['breadcrumbs'][] = ['label' => 'Comforts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comfort-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->comfort_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->comfort_id], [
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
            'comfort_id',
            'comfort_ass',
            'comfort_bluetooth',
            'comfort_dvd',
            'comfort_tiptronic',
            'comfort_usb',
            'comfort_air_susp',
            'comfort_keyless',
            'comfort_different',
            'comfort_bordcomp',
            'comfort_lightsens',
            'comfort_mirror',
            'comfort_windows',
            'comfort_el_susp',
            'comfort_el_seats',
            'comfort_eps',
            'comfort_climatic',
            'comfort_climatronic',
            'comfort_multi_st',
            'comfort_navigation',
            'comfort_st_heat',
            'comfort_heater',
            'comfort_fr_sc_heat',
            'comfort_seat_heat',
            'comfort_st_adjust',
            'comfort_rain_sense',
            'comfort_hydraulic',
            'comfort_light_wash',
            'comfort_cruise',
            'comfort_stereo',
            'comfort_dpf',
            'comfort_fridge',
        ],
    ]) ?>

</div>
