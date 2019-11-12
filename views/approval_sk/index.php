<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Approval_skSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Approval Sks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approval-sk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Approval Sk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'surat_keluar_id',
            'jabatan_users_id',
            'status',
            'tanggal',
            //'keterangan:ntext',
            //'dari_jabatan_users_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
