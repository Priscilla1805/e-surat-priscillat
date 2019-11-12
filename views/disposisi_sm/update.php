<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Disposisi_sm */

$this->title = 'Update Disposisi Sm: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Disposisi Sms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="disposisi-sm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
