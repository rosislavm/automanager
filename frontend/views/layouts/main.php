<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use common\models\User;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags()?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head()?>
</head>
<body>
    <?php $this->beginBody()?>
    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => 'Automanager',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top'
            ]
        ]);
        $menuItems = [
            [
                'label' => 'Начало',
                'url' => [
                    '/site/index'
                ]
            ],
            [
                'label' => 'За Automanager',
                'url' => [
                    '/site/about'
                ]
            ],
            [
                'label' => 'Контакти',
                'url' => [
                    '/site/contact'
                ]
            ]
        ];
        if (Yii::$app->user->isGuest) {
            $menuItems[] = [
                'label' => 'Регистрация',
                'url' => [
                    '/site/signup'
                ]
            ];
            $menuItems[] = [
                'label' => 'Вход',
                'url' => [
                    '/site/login'
                ]
            ];
        } else {
            $menuItems[] = [
                'label' => 'Отписване (' . Yii::$app->user->identity->username . ')',
                'url' => [
                    '/site/logout'
                ],
                'linkOptions' => [
                    'data-method' => 'post'
                ]
            ];
            if (Yii::$app->user->identity->type == User::TYPE_OWNER){
                $menuItems[] = [
                    'label' => 'Добави Служител',
                    'url' => [
                        '/site/register'
                    ]
                ];


            }
             $menuItems[] = [
                'label' => 'Моите Автосалони',
                'url' => [
                    '/showroom/'
                ]
            ];

            $menuItems[] = [
                'label' => 'Моите Автомобили',
                'url' => [
                    '/cars/'
                ]
            ];
        }
            //     $menuItems[] = [
            //     '<a href="#" class="cart">',
            //     '<span class="quantity">2</span>',
            //     '<span class="amount"><i class="fa fa-shopping-cart"></i>$55</span>',
            //     '</a>',
            //     'label' => 'Количка',
            //     'url' => '#',
            //     'items' => [
            //     ['label'=>'',
            //     'url'=>''],
            //     '<div class="media">',
            //     '<a class="pull-right" href="index.php?r=site/static&view=product">',
            //     '<img class="media-object" src="img/products/prod-scs-1.jpg" alt=""/>',
            //     '</a>',
            //     '<div class="media-body">',
            //     '<h4 class="media-heading"><a href="index.php?r=site/static&view=product">Canon EOS T4i</a></h4>',
            //     '1 x $43',
            //     '</div>',
            //     '</div>',
            //     '<div class="media">',
            //     '<a class="pull-right" href="index.php?r=site/static&view=product">',
            //     '<img class="media-object" src="img/products/prod-scs-2.jpg" alt=""/>',
            //     '</a>',
            //     '<div class="media-body">',
            //     '<h4 class="media-heading"><a href="index.php?r=site/static&view=product">Canon EOS 6D</a></h4>',
            //     '1 x $12',
            //     '</div>',
            //     '</div>',
            //     '<p class="subtotal">',
            //     '<strong>Subtotal:</strong>',
            //     '<span class="amount">$55</span>',
            //     '</p>',
            //     '<p class="buttons">',
            //     Html::a(Html::button('View Cart',['class'=>'btn btn-inverse viewcart']),'#'),
            //     '<br/><br/>',
            //     Html::a(Html::button('Checkout',['class'=>'btn btn-inverse viewcart']), '#'),
            //     '</p>',
            //     ]
            // ];
            echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => $menuItems,
                    ]);
                NavBar::end();
        ?>

        <div class="container">
        <?=Breadcrumbs::widget(['homeLink' => [ 
                      'label' => Yii::t('yii', 'Начало'),
                      'url' => Yii::$app->homeUrl,
                 ],
                 'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []])?>
        <?= Alert::widget()?>
        <?= $content?>
        </div>
	</div>

	<footer class="footer">
		<div class="container">
			<p class="pull-left">&copy; TSKmatrix <?= date('Y') ?></p>
			<p class="pull-right"><?= Yii::powered() ?></p>
		</div>
	</footer>

    <?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>
