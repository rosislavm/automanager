<?php

namespace frontend\controllers;

use Yii;
use common\models\Showroom;
use common\models\UserShowroom;
use common\models\User;
use common\models\Cars;
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
            $carsDataProvider = new ActiveDataProvider([
                'query' => Cars::find()->joinWith(['userShowrooms'])->where(['id_user' => Yii::$app->getUser()->id, 'car_sh_id' => $id]),
            ]);
            return $this->render('view', [
                'model' => $this->findModel($id),
                'carsDataProvider' => $carsDataProvider,
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
            
            $user_showroom = new UserShowroom;
            $user_showroom->id_user = Yii::$app->getUser()->id;
            $user_showroom->id_showroom = $model->sh_id;
            $user_showroom->save();

            if (!empty($model->users)){
                foreach ($model->users as $key => $value) {
                    $user_showroom = new UserShowroom;
                    $user_showroom->id_user = $value;
                    $user_showroom->id_showroom = $model->sh_id;
                    $user_showroom->save();
                }
            }


            return $this->redirect(['view', 'id' => $model->sh_id]);
        } else {

        //Rosko
        $users = User::find()->where(['parent' => Yii::$app->getUser()->id])->asArray()->all();

        return $this->render('create', [
            'model' => $model,
            'users' => $users,
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
            //Rosko
            $users = User::find()->where(['parent' => Yii::$app->getUser()->id])->asArray()->all();
            $model = $this->findModel($id);

            $selected_users = UserShowroom::find('id_user')->where(['id_showroom' => $id])->asArray()->All();
            if (!empty($selected_users)) {
                foreach ($selected_users as $user) {
                    $model->users[] = $user['id_user'];
                }
            }

            if ($model->load(Yii::$app->request->post()) && $model->save()) {

                // UserShowroom::delete()->where(['id_showroom' => $id]);
                UserShowroom::deleteAll('id_showroom = :id_showroom', [':id_showroom' => $id]);
                $user_showroom = new UserShowroom;
                $user_showroom->id_user = Yii::$app->getUser()->id;
                $user_showroom->id_showroom = $model->sh_id;
                $user_showroom->save();

                if (!empty($model->users)){
                    foreach ($model->users as $key => $value) {
                        $user_showroom = new UserShowroom;
                        $user_showroom->id_user = $value;
                        $user_showroom->id_showroom = $model->sh_id;
                        $user_showroom->save();
                    }
                }

                return $this->redirect(['view', 'id' => $model->sh_id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                    'users' => $users,
                ]);
            }
        }else{
            return $this->redirect(['index']);
        }


        return $this->render('create', [
            'model' => $model,
            'users' => $users,
            // 'type' => $type
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
