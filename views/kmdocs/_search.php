<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KmdocsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kmdocs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ref') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'typeteam') ?>

    <?= $form->field($model, 'typedocs') ?>

    <?php // echo $form->field($model, 'uploader') ?>

    <?php // echo $form->field($model, 'covenant') ?>

    <?php // echo $form->field($model, 'docs') ?>

    <?php // echo $form->field($model, 'upload_date') ?>

    <?php // echo $form->field($model, 'end_date') ?>

    <?php // echo $form->field($model, 'success_date') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
