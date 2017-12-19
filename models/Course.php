<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property integer $id_course
 * @property string $nama
 * @property string $deskripsi
 * @property string $department
 * @property integer $semester
 * @property integer $id_lecturer
 *
 * @property Users $idLecturer
 * @property Enrollment[] $enrollments
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'deskripsi', 'department', 'semester', 'id_lecturer'], 'required'],
            [['semester', 'id_lecturer'], 'integer'],
            [['nama'], 'string', 'max' => 50],
            [['deskripsi'], 'string', 'max' => 500],
            [['department'], 'string', 'max' => 100],
            [['id_lecturer'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['id_lecturer' => 'id_user']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_course' => 'Id Course',
            'nama' => 'Nama',
            'deskripsi' => 'Deskripsi',
            'department' => 'Department',
            'semester' => 'Semester',
            'id_lecturer' => 'Id Lecturer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdLecturer()
    {
        return $this->hasOne(Users::className(), ['id_user' => 'id_lecturer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnrollments()
    {
        return $this->hasMany(Enrollment::className(), ['id_course' => 'id_course']);
    }
}
