<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Hidayahlinks $model */

$this->title = Yii::t('common', 'Create Hidayahlinks');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Hidayahlinks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hidayahlinks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
