<?php
/* @var $this yii\web\View */

use frontend\assets\IndexAsset;
use yii\helpers\Html;

$this->title = 'Yiicomm - a tutorial';

IndexAsset::register($this);

?>

<!-- start: Container -->
<div id="container">
	<div class="container span12">
		<div class="row-fluid">

<!-- <div class="site-index"> -->

	<div class="jumbotron">            
                 <?= Html::img('@web/img/auto.png', ['alt' => 'My logo']) ?>
	</div>
	<div class="body-content">
		<div class="row">
			<div class="col-lg-4">
				<h2>Управление на Автокъщи</h2>
				<p>
                                    Автомениджър е уеб приложение създадено за собственици на 
                                    автокъщи. Всеки собственик може лесно и бързо да създава,
                                    добавя и управлява своите автокъщи и колите в тях.
                                </p>

			</div>
			<div class="col-lg-4">
				<h2>Добавяне на Автокъщи</h2>
				<p>
					След регистрация в "Аутомениджър". Може да създавете 
                                        НЕограничен брой автокъщи, в които да разпределите 
                                        вашите автомобили.
				</p>
 
			</div>
			<div class="col-lg-4">
				<h2>Добавяне на Автомобили</h2>

				<p>Now you may add additional extensions to your site. Be sure that
					they are for Yii 2.0.</p>

			</div>
		</div>

        <div class="row">
            <div class="col-lg-4">
                <h2>Промяна на данни</h2>

                <p>
                        Имайки регистрация в приложението, Вие може лесно и бързо да променяте
                        Вичко създадено от Вас.
                </p>
             </div>
            <div class="col-lg-4">
                <h2>Контакти</h2>

                <p>
                    България, София, ул.Проф.Христо Данов 21
                    <br>
                    automanager@gmail.com
                </p>
                <p><a class="btn btn-default" href="index.php?r=site%2Fcontact" >Още</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Добавяне на служители</h2>

                <p>Looking for an extension and don't want to re-invent the wheel? Check out the extensions here.</p>

             </div>

        </div>
 
    </div>
    </div>
    </div>

</div>

  

