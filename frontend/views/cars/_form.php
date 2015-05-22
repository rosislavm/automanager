<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Cars */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
for ($i = date("Y"); $i >= 1970; $i--){
    $year[$i]  = $i;
}
?>

<div class="cars-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<div class="option">
    <?= $form->field($model, 'car_year')->dropDownList($year) ?>
</div>
    <?= $form->field($model, 'car_img')->fileInput(['maxlength' => true]) ?>
    
    <div class="option">
    <?= $form->field($model, 'car_big_category')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\Category::find()->all(),'id', 'category_name'),
            ['prompt'=>'Избери основна категория']
    )  ?>
    
    <?= $form->field($model, 'car_brand')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\Brand::find()->all(),'id', 'brand_name', 'category_id'),
            ['prompt'=>'Избери марка']
    )  ?>

    <?= $form->field($model, 'car_model')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\Model::find()->all(),'id', 'model_name'),
            ['prompt'=>'Избери модел']
    )  ?>

    <?= $form->field($model, 'car_engine_type')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\EngineType::find()->all(),'id', 'engine_type'),
            ['prompt'=>'Избери тип на двигателя']
    )  ?>

    <?= $form->field($model, 'car_transmission')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\Transmission::find()->all(),'id', 'transmission_name'),
            ['prompt'=>'Избери скоростна кутия']
    )  ?>
        
    <?= $form->field($model, 'car_colour')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\Colours::find()->all(),'colour_id', 'colour_name'),
            ['prompt'=>'Избери цвят']
    )  ?>
    
    <?= $form->field($model, 'car_auto_category')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\AvtoCategory::find()->all(),'id', 'avto_category'),
            ['prompt'=>'Избери категория']
    )  ?>

    <?= $form->field($model, 'car_condition')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\Condition::find()->all(),'id', 'condition_name'),
            ['prompt'=>'Избери състояние']
    )  ?>
        
    <?= $form->field($model, 'car_town')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\Town::find()->all(),'id', 'town_name'),
            ['prompt'=>'Избери град']
    )  ?>

    <?php //= $form->field($model, 'car_sh_id')->dropDownList(
           // User::find()->with('showrooms')->joinWith(['showrooms'])->where(['id_user' => Yii::$app->getUser()->id])->asArray()->One()['showrooms'], 'id_user','sh_name' ),
            //['prompt'=>'Избери автосалон']
    //)  ?>


    <?= $form->field($model, 'car_sh_id')->textInput(['maxlength' => true]) ?>


    </div>

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

    <?= $form->field($model, 'car_milleage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_power')->textInput(['maxlength' => true]) ?>

    <h5>Комфорт</h5>

    <?= $this->render('_form_comfort', [
        'model' => $comfort_model,
        'form' => $form,
    ]) ?>

    <h5>Екстериор</h5>

    <?= $this->render('_form_exterior', [
        'model' => $exterior_model,
        'form' => $form,
    ]) ?>

    <h5>Интериор</h5>

    <?= $this->render('_form_interior', [
        'model' => $interior_model,
        'form' => $form,
    ]) ?>

    <h5>Други</h5>

    <?= $this->render('_form_other_ex', [
        'model' => $other_ex_model,
        'form' => $form,
    ]) ?>

    <h5>Защита</h5>

    <?= $this->render('_form_protection', [
        'model' => $protection_model,
        'form' => $form,
    ]) ?>

    <h5>Безопасност</h5>

    <?= $this->render('_form_safety', [
        'model' => $safety_model,
        'form' => $form,
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Въведи' : 'Обнови', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
