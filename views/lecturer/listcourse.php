<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

use yiister\gentelella\widgets\panel;
?>

<div class="row">
	<div class="col-md-12">
		<a href="courseadd" class="btn btn-success"><i class="fa fa-plus"></i> Buat Course</a>
	</div>
</div>
<div class="row">
    <div class="col-md-4 col-xs-12">
    <a href="course">
		<?php
        Panel::begin(
            [
                'header' => 'Data Mining',
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
                <td><b>Student Enrolled</b></td>
                <td>: <span style="color:green;font-weight: bold;text-decoration:underline">17</span></td>
            </tr>
            <tr>
                <td><b></b></td>
                <td style="text-align:right">
                    Created: 3 November 2017
                </td>
            </tr>
        </table>
		</div>
        <?php Panel::end() ?>
    </a>
    </div>
    
    <div class="col-md-4 col-xs-12">
		<?php
        Panel::begin(
            [
                'header' => 'Computer Vision',
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
                <td>: 5</td>
            </tr>
            <tr>
                <td><b>Student Enrolled</b></td>
                <td>: <span style="color:green;font-weight: bold;text-decoration:underline">23</span></td>
            </tr>
            <tr>
                <td><b></b></td>
                <td style="text-align:right">
                    Created: 1 October 2017
                </td>
            </tr>
        </table>
		</div>
        <?php Panel::end() ?>
    </div>

    <div class="col-md-4 col-xs-12">
		<?php
        Panel::begin(
            [
                'header' => 'Human and Computer Interaction',
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
                <td><b>Student Enrolled</b></td>
                <td>: <span style="color:green;font-weight: bold;text-decoration:underline">10</span></td>
            </tr>
            <tr>
                <td><b></b></td>
                <td style="text-align:right">
                    Created: 14 December 2017
                </td>
            </tr>
        </table>
		</div>
        <?php Panel::end() ?>
    </div>

</div>