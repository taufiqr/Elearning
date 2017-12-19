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
                'header' => 'Student Rosita',
            ]
        )
        ?>
        <div>
        <table style="width:100%">
            <tr>
                <td><b>Jurusan</b></td>
                <td>: Teknik Informatika</td>
            </tr>
            <tr>
                <td><b>Semester</b></td>
                <td>: 7</td>
            </tr>
            <tr>
                <td><b>Enrolled Course</b></td>
                <td>: <span style="color:red;font-weight: bold;text-decoration:underline">1</span> out of 3</td>
            </tr>
            <tr>
                <td><b>Performance</b></td>
                <td>: <span style="color:green;font-weight: bold;text-decoration:underline">Good</span></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-default">beri saran</button>
            </tr>
        </table>
		</div>
        <?php Panel::end() ?>
    </div>
    
    <div class="col-md-4 col-xs-12">
    <?php
        Panel::begin(
            [
                'header' => 'Student Festy',
            ]
        )
        ?>
        <div>
        <table style="width:100%">
            <tr>
                <td><b>Jurusan</b></td>
                <td>: Teknik Informatika</td>
            </tr>
            <tr>
                <td><b>Semester</b></td>
                <td>: 7</td>
            </tr>
            <tr>
                <td><b>Enrolled Course</b></td>
                <td>: <span style="color:red;font-weight: bold;text-decoration:underline">2</span> out of 3</td>
            </tr>
            <tr>
                <td><b>Performance</b></td>
                <td>: <span style="color:yellow;font-weight: bold;text-decoration:underline;background: #cacaca;">Warning</span></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-default">beri saran</button>
            </tr>
        </table>
        </div>
        <?php Panel::end() ?>
    </div>

    <div class="col-md-4 col-xs-12">
    <?php
        Panel::begin(
            [
                'header' => 'Student Rizal',
            ]
        )
        ?>
        <div>
        <table style="width:100%">
            <tr>
                <td><b>Jurusan</b></td>
                <td>: Teknik Informatika</td>
            </tr>
            <tr>
                <td><b>Semester</b></td>
                <td>: 7</td>
            </tr>
            <tr>
                <td><b>Enrolled Course</b></td>
                <td>: <span style="color:green;font-weight: bold;text-decoration:underline;">3</span> out of 3</td>
            </tr>
            <tr>
                <td><b>Performance</b></td>
                <td>: <span style="color:green;font-weight: bold;text-decoration:underline">Good</span></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-default">beri saran</button>
            </tr>
        </table>
        </div>
        <?php Panel::end() ?>
    </div>

</div>