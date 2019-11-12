<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Appoval_rn */

$this->title = 'Update Appoval Rn: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Appoval Rns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appoval-rn-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
