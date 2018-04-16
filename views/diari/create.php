<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Diari */

$this->title = 'Create Diari';

?>
<div class="diari-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
