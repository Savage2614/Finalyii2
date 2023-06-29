<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Workingteam $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="workingteam-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'workerimage')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'workername')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'workerpost')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'workernameru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'workerpostru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'twitterurl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebookurl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instagramurl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linkedinurl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
