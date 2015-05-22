<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Interior */
/* @var $form yii\widgets\ActiveForm */
?>

    <?= $form->field($model, 'interior_velure')->checkbox() ?>

    <?= $form->field($model, 'interior_right_handdrive')->checkbox() ?>

    <?= $form->field($model, 'interior_leather')->checkbox() ?>

