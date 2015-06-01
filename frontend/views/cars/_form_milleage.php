<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Milleage */
/* @var $form yii\widgets\ActiveForm */
?>
	<div class="inline">
    	<?= $form->field($model, 'milleage_real')->textInput() ?>
    </div>
    <div class="inline">
    	<?= $form->field($model, 'milleage_current')->textInput() ?>
    </div>
