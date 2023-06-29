<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Percent $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="percent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'html')->textInput() ?>

    <?= $form->field($model, 'css')->textInput() ?>

    <?= $form->field($model, 'js')->textInput() ?>

    <?= $form->field($model, 'php')->textInput() ?>

    <?= $form->field($model, 'wordpresscms')->textInput() ?>

    <?= $form->field($model, 'photoshop')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
