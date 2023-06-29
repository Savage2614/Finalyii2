<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Category;
/** @var yii\web\View $this */
/** @var app\models\Portfoliophotos $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="portfoliophotos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'categoryid')->dropDownList(
        ArrayHelper::map(Category::find()->all(),'id','categoryname'),
        [
            'prompt' => 'Выберите категорию'
        ]
    ) ->label('Категория')?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
