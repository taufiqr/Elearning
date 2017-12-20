<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
?>

<?php 
        $form = ActiveForm::begin([
            'id' => 'login-form-vertical', 
            'type' => ActiveForm::TYPE_VERTICAL,
            'options' => ['class'=>'login-form']
        ]); 

        echo $form->field($model, 'username')->textInput(['placeholder'=>'Username'])->label(false);
        echo $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false);?>
        <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
        </div>
<?php ActiveForm::end();?>