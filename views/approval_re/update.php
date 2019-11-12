<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Approval_re */

$this->title = 'Update Approval Re: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Approval Res', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="approval-re-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
