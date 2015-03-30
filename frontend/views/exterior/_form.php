<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Exterior */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exterior-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'exterior_2doors')->textInput() ?>

    <?= $form->field($model, 'exterior_4doors')->textInput() ?>

    <?= $form->field($model, 'exterior_led_lights')->textInput() ?>

    <?= $form->field($model, 'exterior_xenon')->textInput() ?>

    <?= $form->field($model, 'exterior_al_wheels')->textInput() ?>

    <?= $form->field($model, 'exterior_methalic')->textInput() ?>

    <?= $form->field($model, 'exterior_heat_windscr')->textInput() ?>

    <?= $form->field($model, 'exterior_panorama')->textInput() ?>

    <?= $form->field($model, 'exterior_spoilers')->textInput() ?>

    <?= $form->field($model, 'exterior_toolbar')->textInput() ?>

    <?= $form->field($model, 'exterior_halogen_lights')->textInput() ?>

    <?= $form->field($model, 'exterior_summer_roof')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
