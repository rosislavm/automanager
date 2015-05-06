<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Появи се проблем при обработката на вашата заявка от сървъра.
    </p>
    <p>
        Моля свържете се с нас ако смятате, че проблема е сървърен! Благодарим Ви!
    </p>

</div>
