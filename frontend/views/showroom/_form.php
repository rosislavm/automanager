<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Showroom */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="showroom-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sh_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sh_address')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
