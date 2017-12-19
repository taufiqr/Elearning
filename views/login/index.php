<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
?>

<?php 
        $form = ActiveForm::begin([
            'id' => 'login-form-vertical', 
            'type' => ActiveForm::TYPE_VERTICAL,
            //'option' => ['class'=>'register-form']
        ]); 

        echo $form->field($model, 'username');
        echo $form->field($model, 'password');
        echo $form->field($model, 'role')->dropDownList(['student'=>'student','lecturer'=>'lecturer']); ?>
        <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
        </div>
<?php ActiveForm::end();?>