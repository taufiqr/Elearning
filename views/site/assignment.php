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
                                            'byline' =>  Html::a('Deadline : 01-01-2018', ['site/assignment2'],['class' => 'profile-link']),
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