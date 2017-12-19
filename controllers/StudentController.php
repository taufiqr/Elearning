<?php

namespace app\controllers;

use app\models\Users;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use Yii;

class StudentController extends \yii\web\Controller
{
    public $layout='student';



    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','listcourse','course','assignment'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index','listcourse','course','assignment'],
                        //'roles' => ['@'],
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

    public function actionIndex()
    {
        $user= Users::find()
            ->where(['id_user'=>Yii::$app->user->getId()])
            ->one();
        $this->view->params['customParam'] = $user;
        return $this->render('index',['user'=>$user]);
    }

   public function actionListcourse()
    {
        return $this->render('listcourse');
    }

    public function actionCourse()
    {
        return $this->render('course');
    }
   
    public function actionAssignment()
    {
        return $this->render('assignment');
    }
    public function actionAssignment2()
    {
        return $this->render('assignment2');
    }

}
