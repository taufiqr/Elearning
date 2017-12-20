<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yiister\gentelella\widgets\panel;
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
        <?php
        Panel::begin(
            [
                'header' => 'Enrolled',
                'icon' => 'arrow-up',
                'collapsable' => true,
            ]
        )
        ?>
        <div class="row">
        	 <div class="col-xs-12 col-md-4">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika - Semester 2',
		                'number' => 'Struktur Data',
		            ]
		        )
		        ?>
		    </div>
		    <div class="col-xs-12 col-md-4">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika - Semester 3',
		                'number' => 'Pemrograman Berbasis Objek', 
		            ]
		        )
		        ?>
		    </div>
		    <div class="col-xs-12 col-md-4">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika - Semester 4',
		                'number' => 'Pemrograman Lanjut', 
		            ]
		        )
		        ?>
		    </div>
		    <div class="col-xs-12 col-md-4">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika - Semester 5',
		                'number' => 'Kecerdasan Buatan', 
		            ]
		        )
		        ?>
		    </div>
		    <div class="col-xs-12 col-md-4">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika - Semester 6',
		                'number' => 'Machine Learning', 
		            ]
		        )
		        ?>
		    </div>
		    <div class="col-xs-12 col-md-4">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika - Semester 7',
		                'number' => 'Data Mining', 
		            ]
		        )
		        ?>
		    </div>
		    
		</div>

        <?php Panel::end() ?>
</div>

<div>
        <?php
        Panel::begin(
            [
                'header' => 'Available',
                'icon' => 'arrow-up',
                'collapsable' => true,
            ]
        )
        ?>
        <div class="row">
        	 <div class="col-xs-12 col-md-4">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika - Semester 2',
		                'number' => Html::a('Struktur Data', ['student/course'], ['class' => 'profile-link']),
		            ]
		        )
		        ?>
		    </div>
		    <div class="col-xs-12 col-md-4">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika - Semester 3',
		                'number' => Html::a('Pemrograman Berbasis Objek', ['site/course'], ['class' => 'profile-link']),
		            ]
		        )
		        ?>
		    </div>
		    <div class="col-xs-12 col-md-4">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika - Semester 4',
		                'number' => Html::a('Konsep Jaringan', ['site/course'], ['class' => 'profile-link']),
		            ]
		        )
		        ?>
		    </div>
		    <div class="col-xs-12 col-md-4">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika - Semester 5',
		                'number' => Html::a('Kecerdasan Buatan', ['site/course'], ['class' => 'profile-link']),
		            ]
		        )
		        ?>
		    </div>
		    <div class="col-xs-12 col-md-4">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika - Semester 6',
		                'number' => Html::a('Machine Learning', ['site/course'], ['class' => 'profile-link']),
		            ]
		        )
		        ?>
		    </div>
		    <div class="col-xs-12 col-md-4">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika - Semester 7',
		                'number' => Html::a('Data Mining', ['site/course'], ['class' => 'profile-link']),
		            ]
		        )
		        ?>
		    </div>
		    
		</div>

        <?php Panel::end() ?>
</div>

