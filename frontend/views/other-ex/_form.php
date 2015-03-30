<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OtherEx */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="other-ex-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'other_ex_4x4')->textInput() ?>

    <?= $form->field($model, 'other_ex_7_seats')->textInput() ?>

    <?= $form->field($model, 'other_ex_buy_back')->textInput() ?>

    <?= $form->field($model, 'other_ex_change')->textInput() ?>

    <?= $form->field($model, 'other_ex_gas')->textInput() ?>

    <?= $form->field($model, 'other_ex_cashed')->textInput() ?>

    <?= $form->field($model, 'other_ex_crashed')->textInput() ?>

    <?= $form->field($model, 'other_ex_leasing')->textInput() ?>

    <?= $form->field($model, 'other_ex_methan')->textInput() ?>

    <?= $form->field($model, 'other_ex_on_parts')->textInput() ?>

    <?= $form->field($model, 'other_ex_servised')->textInput() ?>

    <?= $form->field($model, 'other_ex_new_import')->textInput() ?>

    <?= $form->field($model, 'other_ex_tax_credit')->textInput() ?>

    <?= $form->field($model, 'other_ex_registered')->textInput() ?>

    <?= $form->field($model, 'other_ex_service_book')->textInput() ?>

    <?= $form->field($model, 'other_ex_tuning')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
