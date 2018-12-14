<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KmdocsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kmdocs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kmdocs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kmdocs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ref',
            'title',
            'typeteam',
            'typedocs',
            //'uploader',
            //'covenant',
            //'docs:ntext',
            //'upload_date',
            //'end_date',
            //'success_date',
            //'create_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
