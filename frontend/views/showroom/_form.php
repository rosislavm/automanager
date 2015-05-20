<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Showroom */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="showroom-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sh_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sh_address')->textInput(['maxlength' => true]) ?>
    <?= Html::activeCheckboxList($model, 'users', ArrayHelper::map($users, 'id', 'username')) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Създай' : 'Обнови', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
