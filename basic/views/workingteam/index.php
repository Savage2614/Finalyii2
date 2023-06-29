<?php

use app\models\Workingteam;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Workingteams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workingteam-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Workingteam', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'workerimage',
            'workername:ntext',
            'workerpost:ntext',
            'workernameru:ntext',
            'workerpostru:ntext',
            'twitterurl:url',
            'facebookurl:url',
            'instagramurl:url',
            'linkedinurl:url',
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Workingteam $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
