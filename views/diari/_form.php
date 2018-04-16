<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Diari */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diari-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Diary')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
