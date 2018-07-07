<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\address */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="address-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
  <div class="col-md-4">
    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>
</div>
  <div class="col-md-4">
    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>
</div>

<div class="col-md-2">
    <?= $form->field($model, 'middle')->textInput(['maxlength' => true]) ?>
</div>
</div>
<div class="row">

<div class="col-md-6">

    <?= $form->field($model, 'address1')->textInput(['maxlength' => true]) ?>
  </div>

    <div class="col-md-6">

    <?= $form->field($model, 'address2')->textInput(['maxlength' => true]) ?>
  </div>
</div>

<div class="row">
<div class="col-md-6">
    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
</div>

<div class="col-md-4">
    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-2">
    <?= $form->field($model, 'zip')->textInput(['maxlength' => true]) ?>
</div>
</div>
    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
