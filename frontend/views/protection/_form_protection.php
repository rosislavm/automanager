<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Protection */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="protection-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'protection_alarm')->textInput() ?>

    <?= $form->field($model, 'protection_armored')->textInput() ?>

    <?= $form->field($model, 'protection_imobilizer')->textInput() ?>

    <?= $form->field($model, 'protection_insured')->textInput() ?>

    <?= $form->field($model, 'protection_cent_lock')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
