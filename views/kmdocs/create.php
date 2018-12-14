<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kmdocs */

$this->title = 'Create Kmdocs';
$this->params['breadcrumbs'][] = ['label' => 'Kmdocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kmdocs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
