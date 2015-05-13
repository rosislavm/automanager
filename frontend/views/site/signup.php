<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\User;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Yii::$app->getSession()->hasFlash('success') ? Yii::$app->getSession()->getFlash('success') : '' ?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Моля попълнете следните полета за да се регистрирате!</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'password_repeat')->passwordInput() ?>
                <?php if ($type == User::TYPE_USER): ?>
                    <?= Html::activeCheckboxList($model, 'showrooms', ArrayHelper::map($showrooms, 'sh_id', 'sh_name')) ?>
                <?php endif; ?>
                <div class="form-group">
                    <?= Html::submitButton('Регистрирай ме', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
