<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Percenttable $model */

$this->title = 'Create Percenttable';
$this->params['breadcrumbs'][] = ['label' => 'Percenttables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="percenttable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
