<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DiariSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dear Diary';

?>
<div class="diari-index">

    <h1 align = "center" ><?= Html::encode($this->title) ?> </h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'DiaryNum',
            'Diary:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
      <p align = "center">
        <?= Html::a('Tulis Diary Baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
