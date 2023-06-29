<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Forms $model */

$this->title = Yii::t('common', 'Create Forms');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Forms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="forms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
