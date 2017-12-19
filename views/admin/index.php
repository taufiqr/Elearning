<?php

use yii\helpers\Html;

use yiister\gentelella\widgets\panel;

        Panel::begin(
            [
                'header' => 'Dashboard',
                'icon' => 'cog',
            ]
        )
        ?>

<div class="row">
    <div class="col-xs-12 col-md-3">
        <?=
        \yiister\gentelella\widgets\StatsTile::widget(
            [
                'icon' => 'list-alt',
                'header' => 'Courses',
                'text' => 'All courses list',
                'number' => '128',
            ]
        )
        ?>
    </div>
    <div class="col-xs-12 col-md-3">
        <?=
        \yiister\gentelella\widgets\StatsTile::widget(
            [
                'icon' => 'pie-chart',
                'header' => 'Assignmet',
                'text' => 'List of assigment from all courses',
                'number' => '545',
            ]
        )
        ?>
    </div>
    <div class="col-xs-12 col-md-3">
        <?=
        \yiister\gentelella\widgets\StatsTile::widget(
            [
                'icon' => 'users',
                'header' => 'Students',
                'text' => 'Count of registered students',
                'number' => '1508',
            ]
        )
        ?>
    </div>
    <div class="col-xs-12 col-md-3">
        <?=
        \yiister\gentelella\widgets\StatsTile::widget(
            [
                'icon' => 'users',
                'header' => 'Lecturer',
                'text' => 'Count of registered lecturer',
                'number' => '61',
            ]
        )
        ?>
    </div>
</div>

<?php Panel::end() ?>