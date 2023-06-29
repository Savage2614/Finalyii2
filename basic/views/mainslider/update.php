<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Mainslider $model */

$this->title = 'Update Mainslider: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Mainsliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mainslider-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
