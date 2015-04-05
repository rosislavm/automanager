<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Comfort */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comfort-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'comfort_ass')->checkbox() ?>

    <?= $form->field($model, 'comfort_bluetooth')->checkbox() ?>

    <?= $form->field($model, 'comfort_dvd')->checkbox() ?>

    <?= $form->field($model, 'comfort_tiptronic')->checkbox() ?>

    <?= $form->field($model, 'comfort_usb')->checkbox() ?>

    <?= $form->field($model, 'comfort_air_susp')->checkbox() ?>

    <?= $form->field($model, 'comfort_keyless')->checkbox() ?>

    <?= $form->field($model, 'comfort_different')->checkbox() ?>

    <?= $form->field($model, 'comfort_bordcomp')->checkbox() ?>

    <?= $form->field($model, 'comfort_lightsens')->checkbox() ?>

    <?= $form->field($model, 'comfort_mirror')->checkbox() ?>

    <?= $form->field($model, 'comfort_windows')->checkbox() ?>

    <?= $form->field($model, 'comfort_el_susp')->checkbox() ?>

    <?= $form->field($model, 'comfort_el_seats')->checkbox() ?>

    <?= $form->field($model, 'comfort_eps')->checkbox() ?>

    <?= $form->field($model, 'comfort_climatic')->checkbox() ?>

    <?= $form->field($model, 'comfort_climatronic')->checkbox() ?>

    <?= $form->field($model, 'comfort_multi_st')->checkbox() ?>

    <?= $form->field($model, 'comfort_navigation')->checkbox() ?>

    <?= $form->field($model, 'comfort_st_heat')->checkbox() ?>

    <?= $form->field($model, 'comfort_heater')->checkbox() ?>

    <?= $form->field($model, 'comfort_fr_sc_heat')->checkbox() ?>

    <?= $form->field($model, 'comfort_seat_heat')->checkbox() ?>

    <?= $form->field($model, 'comfort_st_adjust')->checkbox() ?>

    <?= $form->field($model, 'comfort_rain_sense')->checkbox() ?>

    <?= $form->field($model, 'comfort_hydraulic')->checkbox() ?>

    <?= $form->field($model, 'comfort_light_wash')->checkbox() ?>

    <?= $form->field($model, 'comfort_cruise')->checkbox() ?>

    <?= $form->field($model, 'comfort_stereo')->checkbox() ?>

    <?= $form->field($model, 'comfort_dpf')->checkbox() ?>

    <?= $form->field($model, 'comfort_fridge')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
