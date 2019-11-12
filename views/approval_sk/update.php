<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Approval_sk */

$this->title = 'Update Approval Sk: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Approval Sks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="approval-sk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
