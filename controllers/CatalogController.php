<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class CatalogController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
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
     * {@inheritdoc}
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
        $getData = Yii::$app->request->get();
        if (isset($getData['id'])){
//            switch ($getData['id']){
//                case 1:
//                    return $this->render('category1');
//                    break;
//                case 2:
//                    return $this->render('category2');
//                    break;
//                case 3:
//                    return $this->render('category3');
//                    break;
//                case 4:
//                    return $this->render('category4');
//                    break;
//            }
            $dataForCategory = Product::getProductByIdCategory($getData['id']);
            $category = $dataForCategory[0]->category;
            return $this->render('category', [
                'products' => $dataForCategory,
                'category' => $category
            ]);
        } else {
            return $this->render('index');
        }

    }

    public function actionProduct()
    {
        $getData = Yii::$app->request->get();
        $product = Product::getProductById($getData['id']);
        return $this->render('product', [
            'product' => $product
        ]);
    }
}
