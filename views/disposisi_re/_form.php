<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Disposisi_re */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="disposisi-re-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parent_node_id')->textInput() ?>

    <?= $form->field($model, 'child_node_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
