<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class AdminController extends Controller
{
    /**
     * @inheritdoc
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'layout-admin';
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    /*
    public function actionListcourse()
    {
        return $this->render('listcourse');
    }

    public function actionCourse()
    {
        return $this->render('course');
    }
    public function actionMycourses()
    {
        return $this->render('mycourses');
    }
    public function actionAssignment()
    {
        return $this->render('assignment');
    }
    */
    public function actionStudent()
    {
        $this->layout = 'layout-admin';
        return $this->render('student');
    }

    public function actionLecturer()
    {
        $this->layout = 'layout-admin';
        return $this->render('lecture');
    }

    public function actionCourse()
    {
        $this->layout = 'layout-admin';
        return $this->render('course');
    }

    public function actionDetailstu()
    {
        $this->layout = 'layout-admin';
        return $this->render('detailstu');
    }

    public function actionDetaillec()
    {
        $this->layout = 'layout-admin';
        return $this->render('detaillec');
    }

    public function actionDetailcou()
    {
        $this->layout = 'layout-admin';
        return $this->render('detailcou');
    }
}
