<?php
use yii\helpers\Html;

use yiister\gentelella\widgets\panel;
/* @var $this yii\web\View */

// if(isset($model)){
// 	echo "you're logged in";
// }
?>

<div class="text-center">
	<h1>Welcome to Elearning</h1>
</div>
<hr>
<div class="row">
	<div class="col-ls-10" style="margin: 0 20px">
        <?php
        Panel::begin(
            [
                'header' => 'Departments',
            ]
        )
        ?>
        <a href="">
        	<div class="col-xs-12 col-md-3">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika dan Komputer',
		                'text' => '',
		                'number' => 'Teknik Informatika',
		            ]
		        )
		        ?>
		    </div>
        </a>
        <a href="">
        	<div class="col-xs-12 col-md-3">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika dan Komputer',
		                'text' => '',
		                'number' => 'Teknik Informatika',
		            ]
		        )
		        ?>
		    </div>
        </a>
        <a href="">
        	<div class="col-xs-12 col-md-3">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika dan Komputer',
		                'text' => '',
		                'number' => 'Teknik Informatika',
		            ]
		        )
		        ?>
		    </div>
        </a>
        <a href="">
        	<div class="col-xs-12 col-md-3">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika dan Komputer',
		                'text' => '',
		                'number' => 'Teknik Informatika',
		            ]
		        )
		        ?>
		    </div>
        </a>
        <a href="">
        	<div class="col-xs-12 col-md-3">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika dan Komputer',
		                'text' => '',
		                'number' => 'Teknik Informatika',
		            ]
		        )
		        ?>
		    </div>
        </a>
        <a href="">
        	<div class="col-xs-12 col-md-3">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika dan Komputer',
		                'text' => '',
		                'number' => 'Teknik Informatika',
		            ]
		        )
		        ?>
		    </div>
        </a>
        <a href="">
        	<div class="col-xs-12 col-md-3">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika dan Komputer',
		                'text' => '',
		                'number' => 'Teknik Informatika',
		            ]
		        )
		        ?>
		    </div>
        </a>
        <a href="">
        	<div class="col-xs-12 col-md-3">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika dan Komputer',
		                'text' => '',
		                'number' => 'Teknik Informatika',
		            ]
		        )
		        ?>
		    </div>
        </a>
        <a href="">
        	<div class="col-xs-12 col-md-3">
		        <?=
		        \yiister\gentelella\widgets\StatsTile::widget(
		            [
		                'header' => 'Teknik Informatika dan Komputer',
		                'text' => '',
		                'number' => 'Teknik Informatika',
		            ]
		        )
		        ?>
		    </div>
        </a>
        <?php Panel::end() ?>
    </div>
</div>