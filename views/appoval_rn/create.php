<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Appoval_rn */

$this->title = 'Create Appoval Rn';
$this->params['breadcrumbs'][] = ['label' => 'Appoval Rns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appoval-rn-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
