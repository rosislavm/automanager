<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Protection */
/* @var $form yii\widgets\ActiveForm */
?>

    <?= $form->field($model, 'protection_alarm')->checkbox() ?>

    <?= $form->field($model, 'protection_armored')->checkbox() ?>

    <?= $form->field($model, 'protection_imobilizer')->checkbox() ?>

    <?= $form->field($model, 'protection_insured')->checkbox() ?>

    <?= $form->field($model, 'protection_cent_lock')->checkbox() ?>

