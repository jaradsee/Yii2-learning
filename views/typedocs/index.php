<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TypedocsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Typedocs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typedocs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Typedocs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'DOCS_ID',
            'DOCS_NAME',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
