<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Aboutinfrormation $model */

$this->title = 'Create Aboutinfrormation';
$this->params['breadcrumbs'][] = ['label' => 'Aboutinfrormations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aboutinfrormation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
