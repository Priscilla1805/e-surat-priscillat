<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Approval_sk */

$this->title = 'Create Approval Sk';
$this->params['breadcrumbs'][] = ['label' => 'Approval Sks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approval-sk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
