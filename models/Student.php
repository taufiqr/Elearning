<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id_user
 * @property string $username
 * @property string $password
 * @property string $nama
 * @property string $email
 * @property integer $semester
 * @property string $departement
 * @property string $alamat
 * @property string $role
 *
 * @property Enrollment[] $enrollments
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'nama', 'email', 'semester', 'departement', 'alamat', 'role'], 'required'],
            [['semester'], 'integer'],
            [['username', 'password', 'nama', 'email'], 'string', 'max' => 255],
            [['departement', 'alamat'], 'string', 'max' => 100],
            [['role'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'username' => 'Username',
            'password' => 'Password',
            'nama' => 'Nama',
            'email' => 'Email',
            'semester' => 'Semester',
            'departement' => 'Departement',
            'alamat' => 'Alamat',
            'role' => 'Role',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnrollments()
    {
        return $this->hasMany(Enrollment::className(), ['id_student' => 'id_user']);
    }
}
