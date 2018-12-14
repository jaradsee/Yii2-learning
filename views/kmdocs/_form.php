<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kmdocs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kmdocs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'typeteam')->textInput() ?>

    <?= $form->field($model, 'typedocs')->textInput() ?>

    <?= $form->field($model, 'uploader')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'covenant')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'docs')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'upload_date')->textInput() ?>

    <?= $form->field($model, 'end_date')->textInput() ?>

    <?= $form->field($model, 'success_date')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
