<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Table1 */

$this->title = $model->Column 1;
$this->params['breadcrumbs'][] = ['label' => 'Table1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Column 1], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Column 1], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Column 1',
            'Column 2',
            'Column 3',
        ],
    ]) ?>

</div>
