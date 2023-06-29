<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Aboutinfrormation $model */

$this->title = 'Update Aboutinfrormation: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Aboutinfrormations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aboutinfrormation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
