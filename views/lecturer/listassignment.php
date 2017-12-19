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
		<a href="assignmentadd" class="btn btn-success"><i class="fa fa-plus"></i> Buat Assignment</a>
	</div>
</div>
<div class="row">
    <div class="col-md-4 col-xs-12 closed">
		<?php
        Panel::begin(
            [
                'header' => 'Data Mining - Minggu 1',
            ]
        )
        ?>
        <div>
        <table class="table_assignment" style="width:100%">
            <tr>
                <td><b>Tugas</b></td>
                <td>: Mencari contoh implementasi data mining</td>
            </tr>
            <tr>
                <td><b>Status</b></td>
                <td>: Closed</td>
            </tr>
            <tr>
                <td><b>Student Submitted</b></td>
                <td>: <span style="color:green;font-weight: bold;text-decoration:underline">17</span></td>
            </tr>
            <tr>
                <td><b></b></td>
                <td style="text-align:right">
                    Due Date: 14 December 2017
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
                'header' => 'Data Mining - Minggu 2',
            ]
        )
        ?>
        <div>
        <table class="table_assignment" style="width:100%">
            <tr>
                <td><b>Tugas</b></td>
                <td>: Mencari metode normalisasi (harus beda tiap individu)</td>
            </tr>
            <tr>
                <td><b>Status</b></td>
                <td>: Active</td>
            </tr>
            <tr>
                <td><b>Student Submitted</b></td>
                <td>: <span style="color:red;font-weight: bold;text-decoration:underline">6</span></td>
            </tr>
            <tr>
                <td><b></b></td>
                <td style="text-align:right">
                    Due Date: 1 October 2017
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
                'header' => 'Computer Vision - Minggu 1',
            ]
        )
        ?>
        <div>
        <table class="table_assignment" style="width:100%">
            <tr>
                <td><b>Tugas</b></td>
                <td>: Membuat aplikasi color extraction</td>
            </tr>
            <tr>
                <td><b>Status</b></td>
                <td>: Active</td>
            </tr>
            <tr>
                <td><b>Student Submitted</b></td>
                <td>: <span style="color:red;font-weight: bold;text-decoration:underline">0</span></td>
            </tr>
            <tr>
                <td><b></b></td>
                <td style="text-align:right">
                    Due Date: 1 January 2018
                </td>
            </tr>
        </table>
		</div>
        <?php Panel::end() ?>
    </div>

</div>