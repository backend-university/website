<?php

namespace app\admin\modules\subscription\controllers;

use app\models\WebsiteSubscription;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Subscription crud
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
                        'roles' => ['viewSubscriptions'],
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
            'query' => WebsiteSubscription::find(),
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
