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
        <h1>Data Mining</h1>
        <table>
            <tr>
                <td><b>Jurusan</b></td>
                <td> : Teknik Informatika</td>
            </tr>
            <tr>
                <td><b>Semester</b></td>
                <td> : 7</td>
            </tr>
            <tr>
                <td><b>Dibuat</b></td>
                <td> : 3 November 2017</td>
            </tr>
            <tr>
                <td><b>Student Enrolled</b></td>
                <td>: <span style="color:green;font-weight: bold;text-decoration:underline">17</style></td>
            </tr>
            
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2><b>Silabus</b></h2>
        <?=\yiister\gentelella\widgets\Accordion::widget(
            [
                'items' => [
                    
                    [
                        'title' => 'Minggu 1 - Pengenalan Data Mining',
                        'content' => \yiister\gentelella\widgets\Timeline::widget(
                        [
                            'items' => [
                                [
                                    'title' => 'Sejarah',
                                ],
                                [
                                    'title' => 'Pengertian',
                                ],
                                [
                                    'title' => 'Percabangan',
                                ],
                                [
                                    'title' => 'Pemanfaatan',
                                ],
                                [
                                    'title' => 'Tugas 1',
                                ],
                                
                            ]
                        ]
                    ),
                    ],
                
                ],
            ]
        );
        ?>
        <?=\yiister\gentelella\widgets\Accordion::widget(
            [
                'items' => [
                    
                    [
                        'title' => 'Minggu 2 - Normalisasi',
                        'content' => \yiister\gentelella\widgets\Timeline::widget(
                        [
                            'items' => [
                                [
                                    'title' => 'Pengertian',
                                ],
                                [
                                    'title' => 'Pembahasan',
                                ],
                                [
                                    'title' => 'Algoritma',
                                ],
                                [
                                    'title' => 'Tugas 2',
                                ],
                            ]
                        ]
                    ),
                    ],
                
                ],
            ]
        );
        ?>
        <?=\yiister\gentelella\widgets\Accordion::widget(
            [
                'items' => [
                    
                    [
                        'title' => 'Minggu 3 - Text Mining',
                        'content' => \yiister\gentelella\widgets\Timeline::widget(
                        [
                            'items' => [
                                [
                                    'title' => 'Pengertian',
                                ],
                                [
                                    'title' => 'Pembahasan',
                                ],
                                [
                                    'title' => 'Algoritma',
                                ],
                                [
                                    'title' => 'Tugas 3',
                                ],
                            ]
                        ]
                    ),
                    ],
                
                ],
            ]
        );
        ?>
    </div>
</div>