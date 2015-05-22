<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Safety */
/* @var $form yii\widgets\ActiveForm */
?>

    <?= $form->field($model, 'safety_gps')->checkbox() ?>

    <?= $form->field($model, 'safety_traction')->checkbox() ?>

    <?= $form->field($model, 'safety_fr_lights')->checkbox() ?>

    <?= $form->field($model, 'safety_abs')->checkbox() ?>

    <?= $form->field($model, 'safety_rear_airbag')->checkbox() ?>

    <?= $form->field($model, 'safety_fr_airbag')->checkbox() ?>

    <?= $form->field($model, 'safety_side_airbag')->checkbox() ?>

    <?= $form->field($model, 'safety_brake')->checkbox() ?>

    <?= $form->field($model, 'safety_stabilize')->checkbox() ?>

    <?= $form->field($model, 'safety_tyre_pressure')->checkbox() ?>

    <?= $form->field($model, 'safety_parktronic')->checkbox() ?>

    <?= $form->field($model, 'safety_dynamic')->checkbox() ?>

    <?= $form->field($model, 'safety_asr')->checkbox() ?>

    <?= $form->field($model, 'safety_dry_br')->checkbox() ?>

    <?= $form->field($model, 'safety_distronic')->checkbox() ?>

    <?= $form->field($model, 'safety_brake_ass')->checkbox() ?>

