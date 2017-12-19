<?php

namespace app\controllers;
use yii;
use app\models\Course;
class LecturerController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $this->layout='lecturer';
        return $this->render('dashboard');
    }

    public function actionDashboard(){
        $this->layout='lecturer';
        return $this->render('dashboard');
    }

    public function actionListcourse()
    {
        $this->layout='lecturer';
        return $this->render('listcourse');
    }

    public function actionCourse()
    {
        $this->layout='lecturer';
        return $this->render('course');
    }

    public function actionCourseadd()
    {
        $this->layout='lecturer';

        $model = new Course();
        //$request    = Yii::$app->request; 

        if ($model->load(Yii::$app->request->post())) {
            $model->id_lecturer = Yii::$app->user->identity->id_user;
            // $model->email = $request->post('email');
            // $model->message = $request->post('message');
            $model->save();
            Yii::$app->getSession()->setFlash('success', 'Course telah dibuat');
        }
        $model = new Course();
        return $this->render('courseadd', [
            'model' => $model
        ]);
    }

    public function actionListassignment()
    {
        $this->layout='lecturer';
        return $this->render('listassignment');
    }

    public function actionAssignmentadd()
    {
        $this->layout='lecturer';
        return $this->render('assignmentadd');
    }

    public function actionStudentreport()
    {
        $this->layout='lecturer';
        return $this->render('studentreport');
    }

    public function actionCreate()
    {
        $this->layout='lecturer';
        return $this->render('create');
    }
}
