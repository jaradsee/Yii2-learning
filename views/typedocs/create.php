<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Typedocs */

$this->title = 'Create Typedocs';
$this->params['breadcrumbs'][] = ['label' => 'Typedocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typedocs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
