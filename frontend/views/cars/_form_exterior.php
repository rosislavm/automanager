<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Exterior */
/* @var $form yii\widgets\ActiveForm */
?>

    <?= $form->field($model, 'exterior_2doors')->checkbox() ?>

    <?= $form->field($model, 'exterior_4doors')->checkbox() ?>

    <?= $form->field($model, 'exterior_led_lights')->checkbox() ?>

    <?= $form->field($model, 'exterior_xenon')->checkbox() ?>

    <?= $form->field($model, 'exterior_al_wheels')->checkbox() ?>

    <?= $form->field($model, 'exterior_methalic')->checkbox() ?>

    <?= $form->field($model, 'exterior_heat_windscr')->checkbox() ?>

    <?= $form->field($model, 'exterior_panorama')->checkbox() ?>

    <?= $form->field($model, 'exterior_spoilers')->checkbox() ?>

    <?= $form->field($model, 'exterior_toolbar')->checkbox() ?>

    <?= $form->field($model, 'exterior_halogen_lights')->checkbox() ?>

    <?= $form->field($model, 'exterior_summer_roof')->checkbox() ?>
