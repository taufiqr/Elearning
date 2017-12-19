<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use yiister\gentelella\widgets\FlashAlert;
?>
<?php if (Yii::$app->session->hasFlash('success')): ?>
  <?= \yiister\gentelella\widgets\FlashAlert::widget(['showHeader' => true]) ?>
<?php endif; ?>
<h1 class="text-center">Buat Course</h1>
<div class="row">
  <div class="col-sm-offset-3 col-sm-6" style="margin-top: 25px">
    <?php 
          $form = ActiveForm::begin([
              'type' => ActiveForm::TYPE_HORIZONTAL,
              'formConfig' => ['labelSpan' => 2, 'deviceSize' => ActiveForm::SIZE_SMALL]
          ]); 
      ?>
          <?= $form->field($model, 'nama') ?>
          <?= $form->field($model, 'deskripsi')->textarea(['rows' => '3']) ?>
          <?= $form->field($model, 'department')->dropDownList(['Teknik Informatika'=>'Teknik Informatika','Teknik Komputer'=>'Teknik Komputer']) ?>
          <?= $form->field($model, 'semester')->dropDownList([1=>'1',2=>'2',3=>'3',4=>'4',5=>'5',6=>'6',7=>'7',8=>'8',]) ?>
          <div class="form-group">
              <div class="col-sm-offset-10" style="padding-left: 30px">
                  <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
              </div>
          </div>
      <?php ActiveForm::end(); ?>
  </div>
</div>