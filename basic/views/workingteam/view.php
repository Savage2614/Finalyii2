<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Workingteam $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Workingteams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="workingteam-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'worker_image',
            'worker_name:ntext',
            'worker_post:ntext',
            'workernameru:ntext',
            'workerpostru:ntext',
            'twitter_url:url',
            'facebook_url:url',
            'instagram_url:url',
            'linkedin_url:url',
            'status',
        ],
    ]) ?>

</div>
