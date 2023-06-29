<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Percenttable $model */

$this->title = 'Update Percenttable: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Percenttables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="percenttable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
