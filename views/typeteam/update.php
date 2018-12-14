<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Typeteam */

$this->title = 'Update Typeteam: ' . $model->TEAM_ID;
$this->params['breadcrumbs'][] = ['label' => 'Typeteams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TEAM_ID, 'url' => ['view', 'id' => $model->TEAM_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="typeteam-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
