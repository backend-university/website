<?php
namespace app\controllers;

use app\models\product\Product;
use yii\data\ActiveDataProvider;
use yii\data\Sort;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class ProductController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Product::find(),
            'sort' => [
                'class' => Sort::class,
                'defaultOrder' => [
                    'updated_at' => SORT_DESC,
                ],
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        if (!$model = Product::findOne($id)) {
            throw new NotFoundHttpException();
        }

        return $this->render('view', [
            'product' => $model,
        ]);
    }
}
