<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Cars */

$this->title = 'Въвеждане на нов автомобил';
$this->params['breadcrumbs'][] = ['label' => 'Моите Автомобили', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cars-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'comfort_model' => $comfort_model,
        'interior_model' => $interior_model,
        'exterior_model' => $exterior_model,
        'other_ex_model' => $other_ex_model,
        'protection_model' => $protection_model,
        'safety_model' => $safety_model,
        'milleage_model' => $milleage_model,
    ]) ?>

</div>
