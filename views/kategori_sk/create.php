<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\kategori_sk */

$this->title = 'Create Kategori Sk';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Sks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-sk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
