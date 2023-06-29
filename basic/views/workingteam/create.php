<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Workingteam $model */

$this->title = 'Create Workingteam';
$this->params['breadcrumbs'][] = ['label' => 'Workingteams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workingteam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
