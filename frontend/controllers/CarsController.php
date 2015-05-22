<?php

namespace frontend\controllers;

use Yii;
use common\models\Cars;
use common\models\User;
use common\models\Comfort;
use common\models\Interior;
use common\models\Exterior;
use common\models\OtherEx;
use common\models\Protection;
use common\models\Safety;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\BaseFileHelper;
/**
 * CarsController implements the CRUD actions for Cars model.
 */
class CarsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'view', 'create', 'update', 'delete'],
                'rules' => [
                    [
                        'actions' => ['index', 'view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['create', 'update', 'delete'],
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
     * Lists all Cars models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Cars::find()->joinWith(['userShowrooms'])->where(['id_user' => Yii::$app->getUser()->id]),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cars model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Cars model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cars();
        $comfort_model = new Comfort();
        $interior_model = new Interior();
        $exterior_model = new Exterior();
        $other_ex_model = new OtherEx();
        $protection_model = new Protection();
        $safety_model = new Safety();


        if ($model->load(Yii::$app->request->post()) && $model->save()) {

        
            $model->image = UploadedFile::getInstance($model, 'car_img');

            // if ($model->validate()) {                
                BaseFileHelper::createDirectory('uploads/cars/'.$model->car_id.'/', 777);
                $image_path = 'uploads/cars/'.$model->car_id.'/'. $model->image->baseName . '.' . $model->image->extension;
                $model->image->saveAs($image_path);
            // }
            //COMFORT MODEL
            $comfort_model->load(Yii::$app->request->post());
            $comfort_model->save();
            $model->car_comfort = $comfort_model->comfort_id;

            //INTERIOR MODEL
            $interior_model->load(Yii::$app->request->post());
            $interior_model->save();
            $model->car_interior = $interior_model->interior_id;

            //EXTERIOR MODEL
            $exterior_model->load(Yii::$app->request->post());
            $exterior_model->save();
            $model->car_exterior = $exterior_model->exterior_id;

            //OTHER EXTRA MODEL
            $other_ex_model->load(Yii::$app->request->post());
            $other_ex_model->save();
            $model->car_other_ex = $other_ex_model->other_ex_id;

            //PROTECTION MODEL
            $protection_model->load(Yii::$app->request->post());
            $protection_model->save();
            $model->car_protection = $protection_model->protection_id;

            //SAFETY MODEL
            $safety_model->load(Yii::$app->request->post());
            $safety_model->save();
            $model->car_safety = $safety_model->safety_id;

            $model->car_img = $image_path;
            $model->save();


            return $this->redirect(['view', 'id' => $model->car_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'comfort_model' => $comfort_model,
                'interior_model' => $interior_model,
                'exterior_model' => $exterior_model,
                'other_ex_model' => $other_ex_model,
                'protection_model' => $protection_model,
                'safety_model' => $safety_model,
            ]);
        }
    }

    /**
     * Updates an existing Cars model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $comfort_model = $model->carComfort;
        $interior_model = $model->carInterior;
        $exterior_model = $model->carExterior;
        $other_ex_model = $model->carOtherEx;
        $protection_model = $model->carProtection;
        $safety_model = $model->carSafety;

        $old_image = $model->car_img;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->image = UploadedFile::getInstance($model, 'car_img');

            BaseFileHelper::createDirectory('uploads/cars/'.$model->car_id.'/', 777);
            $image_path = 'uploads/cars/'.$model->car_id.'/'. $model->image->baseName . '.' . $model->image->extension;
            
            $comfort_model->load(Yii::$app->request->post());
            $comfort_model->save();
            $model->car_comfort = $comfort_model->comfort_id;


            $interior_model->load(Yii::$app->request->post());
            $interior_model->save();
            $model->car_interior = $interior_model->interior_id;

            $exterior_model->load(Yii::$app->request->post());
            $exterior_model->save();
            $model->car_exterior = $exterior_model->exterior_id;

            $other_ex_model->load(Yii::$app->request->post());
            $other_ex_model->save();
            $model->car_other_ex = $other_ex_model->other_ex_id;

            $protection_model->load(Yii::$app->request->post());
            $protection_model->save();
            $model->car_protection = $protection_model->protection_id;

            $safety_model->load(Yii::$app->request->post());
            $safety_model->save();
            $model->car_safety = $safety_model->safety_id;

            if($model->image->saveAs($image_path)){
                $model->car_img = $image_path;
            }

            if ($model->save() && $old_image){
                @unlink($old_image);
            }

            return $this->redirect(['view', 'id' => $model->car_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'comfort_model' => $comfort_model,
                'interior_model' => $interior_model,
                'exterior_model' => $exterior_model,
                'other_ex_model' => $other_ex_model,
                'protection_model' => $protection_model,
                'safety_model' => $safety_model,
            ]);
        }
    }

    /**
     * Deletes an existing Cars model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cars model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Cars the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cars::find()->joinWith(['userShowrooms'])->where(['id_user' => Yii::$app->getUser()->id, 'car_id' => $id])->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
