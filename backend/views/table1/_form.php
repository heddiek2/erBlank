<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Table1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="table1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Column 1')->textInput() ?>

    <?= $form->field($model, 'Column 2')->textInput() ?>

    <?= $form->field($model, 'Column 3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
