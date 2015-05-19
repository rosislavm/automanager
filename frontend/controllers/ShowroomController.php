<?php

namespace frontend\controllers;

use Yii;
use common\models\Showroom;
use common\models\UserShowroom;
use common\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * ShowroomController implements the CRUD actions for Showroom model.
 */
class ShowroomController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'delete', 'update', 'view', 'create'],
                'rules' => [
                    [
                        'actions' => ['index', 'view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['delete', 'update', 'create'],
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
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Showroom models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Showroom::find()->joinWith(['userShowrooms'])->where(['id_user' => Yii::$app->getUser()->id]),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Showroom model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        if (UserShowroom::find()->where(['id_user' => Yii::$app->getUser()->id, 'id_showroom' => $id])->one()) {
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }else{
            return $this->redirect(['index']);
        }
    }

    /**
     * Creates a new Showroom model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Showroom();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            foreach ($model->users as $key => $value) {
             //Rosko       
                $user_showroom = new UserShowroom;
                $user_showroom->id_user = $value;
                $user_showroom->id_showroom = $model->sh_id;
                $user_showroom->save();
            }

            return $this->redirect(['view', 'id' => $model->sh_id]);
        } else {
           // return $this->render('create', [
           //     'model' => $model,
           // ]);
       // }

        //Rosko
         $users = User::find()->where(['parent' => Yii::$app->getUser()->id])->asArray()->all();

        return $this->render('create', [
            'model' => $model,
            'users' => $users,
            // 'type' => $type
        ]);

        }//Rosko
    }

    /**
     * Updates an existing Showroom model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if (UserShowroom::find()->where(['id_user' => Yii::$app->getUser()->id, 'id_showroom' => $id])->one()) {
            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->sh_id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }else{
            return $this->redirect(['index']);
        }

        //Rosko
        $users = User::find()->joinWith(['showrooms'])->where(['id_user' => Yii::$app->getUser()->id])->asArray()->One()['showrooms'];

        return $this->render('create', [
            'model' => $model,
            'showrooms' => $showrooms,
            'type' => $type
        ]);
    }

    /**
     * Deletes an existing Showroom model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if(UserShowroom::find()->where(['id_user' => Yii::$app->getUser()->id, 'id_showroom' => $id])->one()){
            UserShowroom::deleteAll('id_showroom=:id_showroom', [':id_showroom' => $id]);
            $this->findModel($id)->delete();
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Showroom model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Showroom the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Showroom::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
