<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Interior */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="interior-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'interior_velure')->textInput() ?>

    <?= $form->field($model, 'interior_right_handdrive')->textInput() ?>

    <?= $form->field($model, 'interior_leather')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
