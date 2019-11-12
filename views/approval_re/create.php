<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Approval_re */

$this->title = 'Create Approval Re';
$this->params['breadcrumbs'][] = ['label' => 'Approval Res', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approval-re-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
