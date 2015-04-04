<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Cars */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cars-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'car_year')->textInput(array('rows'=>2,'cols'=>5)) ?>

    <?= $form->field($model, 'car_img')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exterior_repair')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interior_repair')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chassis_repair')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'engine_repair')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_repairs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_spent')->textInput() ?>

    <?= $form->field($model, 'bought_for')->textInput() ?>

    <?= $form->field($model, 'price_for_sale')->textInput() ?>

    <?= $form->field($model, 'max_discount')->textInput() ?>

    <?= $form->field($model, 'docs_available')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paid_duty')->textInput() ?>

    <?= $form->field($model, 'paid_ecotax')->textInput() ?>

    <?= $form->field($model, 'transit_numberplate')->textInput() ?>

    <?= $form->field($model, 'fuel_paid')->textInput() ?>

    <?= $form->field($model, 'car_wash')->textInput() ?>

    <?= $form->field($model, 'hour_book')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disadvantages')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'import_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'has_crashed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_sh_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_engine_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_big_category')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\Category::find()->all(),'id', 'category_name'),
            ['prompt'=>'Основна категория']
    )  ?>
    
    <?= $form->field($model, 'car_auto_category')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\AvtoCategory::find()->all(),'id', 'avto_category'),
            ['prompt'=>'Избери категория']
    )  ?>
    
    <?= $form->field($model, 'car_brand')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\Brand::find()->all(),'id', 'brand_name', 'category_id'),
            ['prompt'=>'Избери марка']
    )  ?>
    
    <?= $form->field($model, 'car_colour')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_comfort')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_condition')->textInput() ?>

    <?= $form->field($model, 'car_exterior')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_interior')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_milleage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_other_ex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_power')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_protection')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_safety')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_town')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_transmission')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
