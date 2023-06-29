<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Portfoliophotos $model */

$this->title = 'Create Portfoliophotos';
$this->params['breadcrumbs'][] = ['label' => 'Portfoliophotos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portfoliophotos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
