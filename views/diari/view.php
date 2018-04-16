<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Diari */

$this->title = $model->DiaryNum;

?>
<div class="diari-view">

    <h1><p>Tulisan Ke-<?= Html::encode($this->title) ?></p></h1>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'DiaryNum',
            'Diary:ntext',
        ],
    ]) ?>
        <p align="center">
        <?= Html::a('Update', ['update', 'id' => $model->DiaryNum], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->DiaryNum], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
