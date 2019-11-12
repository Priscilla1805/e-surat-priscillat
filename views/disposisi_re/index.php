<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Disposisi_reSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Disposisi Res';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disposisi-re-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Disposisi Re', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'parent_node_id',
            'child_node_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
