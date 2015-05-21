<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
use frontend\assets\IndexAsset;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */

IndexAsset::register($this);

$this->title = 'Контакти';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <!-- Google Map -->
   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1467.115634934528!2d23.34422271705151!3d42.656454285297684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbg!4v1431635222697" width="100%" height="300" frameborder="0" style="border:0"></iframe>
    <!---/map-->
    <!-- End Google Map -->
    <div class="container">		
	<div class="row contacts-page">
		<div class="col-md-12">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <section><!-- Contacts -->
                        <h4 class="content-title">Данни за връзка с нас</h4>
                        <ul class="list-unstyled margin-bottom-20">
                            <li><i class="fa fa-map-marker"></i> България, София, ул.Проф.Христо Данов 21</li>
                            <li><i class="fa fa-envelope"></i> automanager@gmail.com</li>
                            <li><i class="fa fa-phone"></i> (+359)887296171</li>
                            <li><i class="fa fa-globe"></i> http://www.automanager.info</li>
                        </ul>
                    </section>
                </div>
                <div class="col-md-4 col-sm-4">
                    <section><!-- Business Hours -->
                        <h4 class="content-title">Работно време</h4>
                        <ul class="list-unstyled">
                            <li><strong>Понеделник - Петък</strong>: 8:00 - 17:00</li>
                            <li><strong>Събота и Неделя</strong>: Почивни дни</li>
                        </ul>
                    </section>
                </div>
                <div class="col-md-4 col-sm-4">
                    <section><!-- Why we are? -->
                        <h4 class="content-title">Ние сме</h4>
                        <p>Малка компания, която тепърва разкрива своя потенциал и разширява бизнес кръга от партньори и клиенти. Отворени сме към иновации и винаги готови да се отзовем при нужда от нашата професионална помощ.</p>
                    </section>
                </div>
            </div>
    <p>
        Ако имате бизнес запитвания или други въпроси, моля попълнете следната форма за да се свържете с нас! Благодарим Ви!
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name')->textInput()->hint('Моля въведете вашето име') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'subject')->dropDownList(['0' => 'Моля изберете', '1' => 'Общо запитване', '2' => 'Трябва ми помощ']) ?>
                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Изпрати', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
</div>
</div>
