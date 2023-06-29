<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Aboutsection $model */

$this->title = Yii::t('common', 'Create Aboutsection');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Aboutsections'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aboutsection-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
