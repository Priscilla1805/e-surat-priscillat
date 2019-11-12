<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Disposisi_sm */

$this->title = 'Create Disposisi Sm';
$this->params['breadcrumbs'][] = ['label' => 'Disposisi Sms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disposisi-sm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
