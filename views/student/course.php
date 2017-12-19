<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yiister\gentelella\widgets\panel;
use yiister\gentelella\widgets\Accordion;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <?php
        Panel::begin(
            [
                'header' => 'Message',
            ]
        )
        ?>
        <p>Pesan atau deskripsi dari Lecturer</p>
    <?php Panel::end() ?>
</div>

<div class="row">
    <?php
        Panel::begin(
            [
                'header' => 'Material',
            ]
        )
        ?>
            <div class="row">
                <div class="col-xs-12 col-md-4">
                <?php $home=Yii::$app->homeUrl?>
                    <?=\yiister\gentelella\widgets\Accordion::widget(
                    [
                        'items' => [
                            
                            [
                                'title' => 'Struktur Data',
                                'content' => \yiister\gentelella\widgets\Timeline::widget(
                                [
                                    'items' => [
                                        [
                                            'title' => Html::a('Bubble Sort', $home.'pdf/SD/Bubble-Sort.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                           'title' => Html::a('Insertion Sort', $home.'pdf/SD/Insertion-Sort.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                           'title' => Html::a('Quick Sort', $home.'pdf/SD/Quick-Sort.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' => Html::a('Selection Sort', $home.'pdf/SD/Selection-Sort.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' => Html::a('Shell Sort', $home.'pdf/SD/Shell-Sort.pdf',['class' => 'profile-link']),
                                        ],
                                        
                                    ]
                                ]
                            ),
                            ],
                           
                        ],
                    ]
                );?>
                </div>
                <div class="col-xs-12 col-md-4">
                    <?=\yiister\gentelella\widgets\Accordion::widget(
                    [
                        'items' => [
                            
                            [
                                'title' => 'Pemrograman Berbasis Objek',
                                'content' => \yiister\gentelella\widgets\Timeline::widget(
                                [
                                    'items' => [
                                        [
                                            'title' => Html::a('Array', 'pdf/OOP/T - Array.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' => Html::a('Class Abstract dan Interface', 'pdf/OOP/T - Class Abstract dan InSterface.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' => Html::a('Class', 'pdf/OOP/T - Class.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' => Html::a('Collection', 'pdf/OOP/T - Collection.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' =>  Html::a('Comparable dan Comparator', 'pdf/OOP/T - Comparable dan Comparator.pdf',['class' => 'profile-link']),
                                        ],
                                        
                                    ]
                                ]
                            ),
                            ],
                           
                        ],
                    ]
                );?>
                </div>
                <div class="col-xs-12 col-md-4">
                    <?=\yiister\gentelella\widgets\Accordion::widget(
                    [
                        'items' => [
                            
                            [
                                'title' => 'Pemrograman Lanjut',
                                'content' => \yiister\gentelella\widgets\Timeline::widget(
                                [
                                    'items' => [
                                        [
                                            'title' => Html::a('Introduction', 'pdf/PL/Intro.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                           'title' => Html::a('Intents 1', 'pdf/PL/Intents-1.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                           'title' => Html::a('Intents 2', 'pdf/PL/Intents-2.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' => Html::a('Files', 'pdf/PL/Files.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' => Html::a('SQL Databases', 'pdf/PL/SQL-Databases.pdf',['class' => 'profile-link']),
                                        ],
                                        
                                    ]
                                ]
                            ),
                            ],
                           
                        ],
                    ]
                );?>
                </div>
                <div class="col-xs-12 col-md-4">
                    <?=\yiister\gentelella\widgets\Accordion::widget(
                    [
                        'items' => [
                            
                            [
                                'title' => 'Kecerdasan Buatan',
                                'content' => \yiister\gentelella\widgets\Timeline::widget(
                                [
                                    'items' => [
                                        [
                                            'title' => Html::a('Search Algorithm', 'pdf/AI/Search_Algorithm.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' => Html::a('Game Playing', 'pdf/AI/Game_playing.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' => Html::a('Logika Fuzzy', 'pdf/AI/Logika_Fuzzy.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' => Html::a('Algoritma Genetika', 'pdf/AI/Algoritma_Genetika.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' =>  Html::a('Sistem Pakar', 'pdf/AI/Sistem_Pakar.pdf',['class' => 'profile-link']),
                                        ],
                                        
                                    ]
                                ]
                            ),
                            ],
                           
                        ],
                    ]
                );?>
                </div>
                <div class="col-xs-12 col-md-4">
                    <?=\yiister\gentelella\widgets\Accordion::widget(
                    [
                        'items' => [
                            
                            [
                                'title' => 'Machine Learning',
                                'content' => \yiister\gentelella\widgets\Timeline::widget(
                                [
                                    'items' => [
                                        [
                                            'title' => Html::a('Concept Learning', 'pdf/ML/Concept Learning.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                           'title' => Html::a('Bayesian Learning', 'pdf/ML/Bayesian Learning.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                           'title' => Html::a('Clustering', 'pdf/ML/Clustering.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' => Html::a('Nearest Neighbor', 'pdf/ML/Nearest Neighbor.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' => Html::a('Validation Model', 'pdf/ML/Validation Model.pdf',['class' => 'profile-link']),
                                        ],
                                        
                                    ]
                                ]
                            ),
                            ],
                           
                        ],
                    ]
                );?>
                </div>
                <div class="col-xs-12 col-md-4">
                    <?=\yiister\gentelella\widgets\Accordion::widget(
                    [
                        'items' => [
                            
                            [
                                'title' => 'Data Mining',
                                'content' => \yiister\gentelella\widgets\Timeline::widget(
                                [
                                    'items' => [
                                        [
                                            'title' => Html::a('Introduction to Data Mining', 'pdf/DM/Introduction to Data Mining.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                           'title' => Html::a('Normalisasi Data', 'pdf/DM/Normalisasi Data.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                           'title' => Html::a('Data Preprocessing', 'pdf/DM/Data preprocessing.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' => Html::a('Decision Tree', 'pdf/DM/Decision Tree.pdf',['class' => 'profile-link']),
                                        ],
                                        [
                                            'title' => Html::a('Text Mining', 'pdf/DM/Text Mining.pdf',['class' => 'profile-link']),
                                        ],
                                        
                                    ]
                                ]
                            ),
                            ],
                           
                        ],
                    ]
                );?>
                </div>
            </div>
            
    <?php Panel::end() ?>
</div>