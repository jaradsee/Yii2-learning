<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Typedocs */

$this->title = 'Update Typedocs: ' . $model->DOCS_ID;
$this->params['breadcrumbs'][] = ['label' => 'Typedocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DOCS_ID, 'url' => ['view', 'id' => $model->DOCS_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="typedocs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
