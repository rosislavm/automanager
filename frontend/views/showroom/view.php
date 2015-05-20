<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\Showroom */

$this->title = $model->sh_name;
$this->params['breadcrumbs'][] = ['label' => 'Моите Автосалони', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="showroom-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if(Yii::$app->user->identity->type == User::TYPE_OWNER){
            echo Html::a('Обнови', ['update', 'id' => $model->sh_id], ['class' => 'btn btn-primary']);
            }
        ?>

        <?php if(Yii::$app->user->identity->type == User::TYPE_OWNER){
                echo Html::a('Изтрий', ['delete', 'id' => $model->sh_id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]); 
            } 
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'sh_id',
            'sh_name',
            'sh_address',
        ],
    ]) ?>

</div>
