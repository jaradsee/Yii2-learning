<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use app\models\Typeteam;
use app\models\Typedocs;

/* @var $this yii\web\View */
/* @var $model app\models\HadocsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hadocs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ref') ?>

    <?= $form->field($model, 'title') ?>

   <?=
    $form->field($model, 'typedocs')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Typedocs::find()->all(), 'DOCS_ID', 'DOCS_NAME'),
        'options' => ['placeholder' => 'เลือกประเภทเอกสาร ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'uploader') ?>

    <?= $form->field($model, 'covenant') ?>

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
