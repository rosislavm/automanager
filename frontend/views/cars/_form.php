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

    <div class="inline"> 
        <?= $form->field($model, 'car_big_category')->dropDownList(
                yii\helpers\ArrayHelper::map(common\models\Category::find()->all(),'id', 'category_name'),
                ['prompt'=>'Избери основна категория']
        )  ?>

    </div>


    <div class="inline"> 
        <?= $form->field($model, 'car_year')->dropDownList($year) ?>
    </div>
    <div class="inline" style="margin-left: 1%;"> 
        <?= $form->field($model, 'car_img')->fileInput(['maxlength' => true]) ?>
    </div>  
<p>


    <div class="inline"> 
    <?= $form->field($model, 'car_brand')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\Brand::find()->all(),'id', 'brand_name', 'category_id'),
            ['prompt'=>'Избери марка']
    )  ?>
    </div>
    <div class="inline"> 
    <?= $form->field($model, 'car_model')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\Model::find()->all(),'id', 'model_name'),
            ['prompt'=>'Избери модел']
    )  ?>
    </div>
    <div class="inline"> 
    <?= $form->field($model, 'car_engine_type')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\EngineType::find()->all(),'id', 'engine_type'),
            ['prompt'=>'Избери тип на двигателя']
    )  ?>
    </div>
</p>
<p>
    <div class="inline"> 
    <?= $form->field($model, 'car_transmission')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\Transmission::find()->all(),'id', 'transmission_name'),
            ['prompt'=>'Избери скоростна кутия']
    )  ?>
    </div>    
    <div class="inline"> 
    <?= $form->field($model, 'car_colour')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\Colours::find()->all(),'colour_id', 'colour_name'),
            ['prompt'=>'Избери цвят']
    )  ?>
    </div>
    <div class="inline"> 
    <?= $form->field($model, 'car_auto_category')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\AvtoCategory::find()->all(),'id', 'avto_category'),
            ['prompt'=>'Избери категория']
    )  ?>
    </div>
    </p><p>
     <div class="inline"> 
    <?= $form->field($model, 'car_condition')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\Condition::find()->all(),'id', 'condition_name'),
            ['prompt'=>'Избери състояние']
    )  ?>
    </div>
    <div class="inline">   
    <?= $form->field($model, 'car_town')->dropDownList(
            yii\helpers\ArrayHelper::map(common\models\Town::find()->all(),'id', 'town_name'),
            ['prompt'=>'Избери град']
    )  ?>
    </div>
    <?php //= $form->field($model, 'car_sh_id')->dropDownList(
           // User::find()->with('showrooms')->joinWith(['showrooms'])->where(['id_user' => Yii::$app->getUser()->id])->asArray()->One()['showrooms'], 'id_user','sh_name' ),
            //['prompt'=>'Избери автосалон']
    //)  ?>

    <div class="inline"> 
    <?= $form->field($model, 'car_sh_id')->textInput(['maxlength' => true]) ?>
    </div>

    <p>
 <div class="inline"> 
    <?= $form->field($model, 'import_country')->textInput(['maxlength' => true]) ?>
</div>
 <div class="inline"> 
    <?= $form->field($model, 'car_milleage')->textInput(['maxlength' => true]) ?>
</div>
 <div class="inline"> 
    <?= $form->field($model, 'car_power')->textInput(['maxlength' => true]) ?>
</div>
    </p>
</p><p>
<hr width="90%">
<div class="inline"> 
    <?= $form->field($model, 'exterior_repair')->textarea(['maxlength' => true]) ?>
</div>
<div class="inline"> 
    <?= $form->field($model, 'interior_repair')->textarea(['maxlength' => true]) ?>
</div>
<div class="inline"> 
    <?= $form->field($model, 'chassis_repair')->textarea(['maxlength' => true]) ?>
</div>
</p><p>
<div class="inline"> 
    <?= $form->field($model, 'engine_repair')->textarea(['maxlength' => true]) ?>
</div>
<div class="inline"> 
    <?= $form->field($model, 'other_repairs')->textarea(['maxlength' => true]) ?>
</div>
<div class="inline"> 
    <?= $form->field($model, 'other_info')->textarea(['maxlength' => true]) ?>
</div>
</p>
<p><hr width="90%">

<div class="inline" > 
    <?= $form->field($model, 'bought_for')->textInput(['placeholder'=> 'Въведи сума']) ?>
</div>

<div class="inline"> 
    <?= $form->field($model, 'total_spent')->textInput(['placeholder'=> 'Въведи сума']) ?>
</div>

<div class="inline"> 
    <?= $form->field($model, 'price_for_sale')->textInput(['placeholder'=> 'Въведи сума']) ?>
</div>
</p>
<p>
<hr width="90%">
<div class="inline"> 
    <?= $form->field($model, 'max_discount')->textInput(['placeholder'=> 'Въведи сума']) ?>
</div>
<div class="inline" > 
    <?= $form->field($model, 'paid_duty')->textInput(['placeholder'=> 'Въведи сума']) ?>
</div>
<div class="inline"> 
    <?= $form->field($model, 'paid_ecotax')->textInput(['placeholder'=> 'Въведи сума']) ?>
</div>
</p>
<p>
<div class="inline" > 
 <?= $form->field($model, 'transit_numberplate')->textInput(['placeholder'=> 'Въведи сума']) ?>
</div>


<div class="inline"> 
    <?= $form->field($model, 'docs_available')->textarea(['maxlength' => true]) ?>
</div>
<div class="inline"> 
    <?= $form->field($model, 'fuel_paid')->textInput(['placeholder'=> 'Въведи сума']) ?>
</div>

</p>
<P>
<div class="inline"> 
    <?= $form->field($model, 'car_wash')->textInput(['placeholder'=> 'Въведи сума']) ?>
</div>
<div class="inline"> 
    <?= $form->field($model, 'hour_book')->textInput(['maxlength' => true]) ?>
</div>
<div class="inline"> 
    <?= $form->field($model, 'disadvantages')->textInput(['maxlength' => true]) ?>
</div>
   
<div class="inline"> 
    <?= $form->field($model, 'has_crashed')->textInput(['maxlength' => true]) ?>
</div>
<p>
<div class="inline"> 
    <h4><b>Комфорт</b></h4>

    <?= $this->render('_form_comfort', [
        'model' => $comfort_model,
        'form' => $form,
    ]) ?>
</div>
<div class="inline"> 
    <h4><b>Защита</b></h4>

    <?= $this->render('_form_protection', [
        'model' => $protection_model,
        'form' => $form,
    ]) ?>

    <h4><b>Екстериор</b></h4>

    <?= $this->render('_form_exterior', [
        'model' => $exterior_model,
        'form' => $form,
    ]) ?>
    <h4><b>Интериор</b></h4>

    <?= $this->render('_form_interior', [
        'model' => $interior_model,
        'form' => $form,
    ]) ?>
</div>
<div class="inline"> 


    <h4><b>Безопасност</b></h4>

    <?= $this->render('_form_safety', [
        'model' => $safety_model,
        'form' => $form,
    ]) ?>

    <h4><b>Други</b></h4>

    <?= $this->render('_form_other_ex', [
        'model' => $other_ex_model,
        'form' => $form,
    ]) ?>
</div>






    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Въведи' : 'Обнови', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
