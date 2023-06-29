<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Mainslider $model */

$this->title = 'Create Mainslider';
$this->params['breadcrumbs'][] = ['label' => 'Mainsliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mainslider-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
