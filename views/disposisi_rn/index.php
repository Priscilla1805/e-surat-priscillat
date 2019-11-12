<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Disposisi_rnSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Disposisi Rns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disposisi-rn-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Disposisi Rn', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'instansi_id',
            'jabatan_id',
            'penerima_surat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
