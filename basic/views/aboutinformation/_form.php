<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Aboutinfrormation $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="aboutinfrormation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'clients')->textInput() ?>

    <?= $form->field($model, 'projects')->textInput() ?>

    <?= $form->field($model, 'hoursofsupport')->textInput() ?>

    <?= $form->field($model, 'hardworkers')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
