<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Comfort */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comfort-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'comfort_ass')->textInput() ?>

    <?= $form->field($model, 'comfort_bluetooth')->textInput() ?>

    <?= $form->field($model, 'comfort_dvd')->textInput() ?>

    <?= $form->field($model, 'comfort_tiptronic')->textInput() ?>

    <?= $form->field($model, 'comfort_usb')->textInput() ?>

    <?= $form->field($model, 'comfort_air_susp')->textInput() ?>

    <?= $form->field($model, 'comfort_keyless')->textInput() ?>

    <?= $form->field($model, 'comfort_different')->textInput() ?>

    <?= $form->field($model, 'comfort_bordcomp')->textInput() ?>

    <?= $form->field($model, 'comfort_lightsens')->textInput() ?>

    <?= $form->field($model, 'comfort_mirror')->textInput() ?>

    <?= $form->field($model, 'comfort_windows')->textInput() ?>

    <?= $form->field($model, 'comfort_el_susp')->textInput() ?>

    <?= $form->field($model, 'comfort_el_seats')->textInput() ?>

    <?= $form->field($model, 'comfort_eps')->textInput() ?>

    <?= $form->field($model, 'comfort_climatic')->textInput() ?>

    <?= $form->field($model, 'comfort_climatronic')->textInput() ?>

    <?= $form->field($model, 'comfort_multi_st')->textInput() ?>

    <?= $form->field($model, 'comfort_navigation')->textInput() ?>

    <?= $form->field($model, 'comfort_st_heat')->textInput() ?>

    <?= $form->field($model, 'comfort_heater')->textInput() ?>

    <?= $form->field($model, 'comfort_fr_sc_heat')->textInput() ?>

    <?= $form->field($model, 'comfort_seat_heat')->textInput() ?>

    <?= $form->field($model, 'comfort_st_adjust')->textInput() ?>

    <?= $form->field($model, 'comfort_rain_sense')->textInput() ?>

    <?= $form->field($model, 'comfort_hydraulic')->textInput() ?>

    <?= $form->field($model, 'comfort_light_wash')->textInput() ?>

    <?= $form->field($model, 'comfort_cruise')->textInput() ?>

    <?= $form->field($model, 'comfort_stereo')->textInput() ?>

    <?= $form->field($model, 'comfort_dpf')->textInput() ?>

    <?= $form->field($model, 'comfort_fridge')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
