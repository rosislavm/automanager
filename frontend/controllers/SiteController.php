<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use common\models\User;
use common\models\PasswordResetRequestForm;
use common\models\ResetPasswordForm;
use common\models\SignupForm;
use common\models\ContactForm;
use common\models\UserShowroom;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup', 'register'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['register'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->user->identity->type == User::TYPE_OWNER;
                        }
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Благодарим Ви, че се свързахте с нас. Ще ви отговорим в най-кратък срок.');
            } else {
                Yii::$app->session->setFlash('error', 'Появи се проблем при изпращането на email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
        $type = USER::TYPE_OWNER;
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->type = $type; 
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
            'type' => $type
        ]);
    }

    public function actionRegister()
    {
        $type = USER::TYPE_USER;
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->type = $type;
            $model->parent =Yii::$app->getUser()->id;
            if ($user = $model->signup()) {
                Yii::$app->getSession()->setFlash('success', 'User: '.$user->username.' беше успешно регистриран.');
                return $this->redirect(['register']);
            }
        }

        //$showrooms = User::find()->with('showrooms')->joinWith(['showrooms'])->where(['id_user' => Yii::$app->getUser()->id])->asArray()->One()['showrooms'];
        $user = User::find()->joinWith(['showrooms'])->where(['id_user' => Yii::$app->getUser()->id])->One();
        print_r($user->showrooms);
//        print_r($showrooms);
        exit;

        return $this->render('signup', [
            'model' => $model,
            'showrooms' => $showrooms,
            'type' => $type
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Проверете вашият email за повече информация.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Съжаляваме, но не успяхме да променим паролата с въведения от вас email.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'Новата парола беше запазена.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
