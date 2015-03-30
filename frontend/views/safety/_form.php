<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Safety */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="safety-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'safety_gps')->textInput() ?>

    <?= $form->field($model, 'safety_traction')->textInput() ?>

    <?= $form->field($model, 'safety_fr_lights')->textInput() ?>

    <?= $form->field($model, 'safety_abs')->textInput() ?>

    <?= $form->field($model, 'safety_rear_airbag')->textInput() ?>

    <?= $form->field($model, 'safety_fr_airbag')->textInput() ?>

    <?= $form->field($model, 'safety_side_airbag')->textInput() ?>

    <?= $form->field($model, 'safety_brake')->textInput() ?>

    <?= $form->field($model, 'safety_stabilize')->textInput() ?>

    <?= $form->field($model, 'safety_tyre_pressure')->textInput() ?>

    <?= $form->field($model, 'safety_parktronic')->textInput() ?>

    <?= $form->field($model, 'safety_dynamic')->textInput() ?>

    <?= $form->field($model, 'safety_asr')->textInput() ?>

    <?= $form->field($model, 'safety_dry_br')->textInput() ?>

    <?= $form->field($model, 'safety_distronic')->textInput() ?>

    <?= $form->field($model, 'safety_brake_ass')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
