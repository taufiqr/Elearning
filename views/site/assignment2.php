<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    font-size: 18px;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

use yiister\gentelella\widgets\panel;
?>

<div class="row">
    <div class="col-md-4 col-xs-12">
        <?php
        Panel::begin(
            [
                'header' => 'Cource',
                'collapsable' => true,
            ]
        )
        ?>
        <?=
            \yiister\gentelella\widgets\Timeline::widget(
                                [
                                    'items' => [
                                        [
                                            'title' => 'Struktur Data',
                                            'byline' => Html::a('Deadline: 01-01-2018', ['site/course'], ['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' => 'Pemrograman Berbasis Objek',
                                        ],
                                        [
                                            'title' => 'Pemrograman Lanjut',
                                        ],
                                        [
                                            'title' => 'Kecerdasan Buatan',
                                        ],
                                        [
                                            'title' => 'Machine Learning',
                                        ],
                                        [
                                            'title' => 'Data Mining',
                                        ],
                                        
                                    ]
                                ]
                            )
        ?>
        <?php Panel::end() ?>
    </div>
</div>

<div class="row">
    <?php
        Panel::begin(
            [
                'header' => 'Submission status',
            ]
        )
    ?>
    <table>
      <tr>
        <th>Submission status</th>
        <td>Submitted for grading</td>
      </tr>
      <tr>
        <th>Grading status</th>
        <td>Not graded</td>
      </tr>
       <tr>
        <th>Due date</th>
        <td>Monday, 01 Januari 2018, 11:00 PM </td>
      </tr>
      <tr>
        <th>Time remaining</th>
        <td>Assignment was submitted 13 hours 27 mins early</td>
      </tr>
       <tr>
        <th>Last modified</th>
        <td>Monday, 01 Januari 2018, 09:00 AM </td>
      </tr>
      <tr>
        <th>File submissions</th>
        <td>Assignment was submitted 13 hours 27 mins early</td>
      </tr>
    </table></br>
    <center><button type="button" onclick="alert('')">Edit Submmission</button></center>
           
</div>
</body>
</html>