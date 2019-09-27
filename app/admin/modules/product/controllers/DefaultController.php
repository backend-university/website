<?php

namespace app\admin\modules\product\controllers;

use app\models\product\Product;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Product crud
 */
class DefaultController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['author'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Product::find(),
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * @return string
     */
    public function actionCreate()
    {
        $model = new Product();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            if ($model->save()) {
                \Yii::$app->session->addFlash('success', 'Saved');
                return $this->redirect(['/admin/product/default']);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * @return string
     */
    public function actionUpdate($id)
    {
        if (!$model = Product::findOne($id)) {
            throw new NotFoundHttpException();
        }

        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            if ($model->save()) {
                \Yii::$app->session->addFlash('success', 'Saved');
                return $this->redirect(['/admin/product/default']);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * @return string
     */
    public function actionDelete($id)
    {
        if (!$model = Product::findOne($id)) {
            throw new NotFoundHttpException();
        }
        $name = $model->name;
        if ($model->delete()) {
            \Yii::$app->session->addFlash('warning', 'Deleted: ' . $name);
            return $this->redirect(['/admin/product/default']);
        }

        return $this->redirect(['/admin/product/default']);
    }
}
