<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Table1 */

$this->title = 'Update Table1: ' . $model->Column 1;
$this->params['breadcrumbs'][] = ['label' => 'Table1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Column 1, 'url' => ['view', 'id' => $model->Column 1]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="table1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
