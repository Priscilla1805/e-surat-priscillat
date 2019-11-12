<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Approval_reSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Approval Res';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approval-re-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Approval Re', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'parent_rules_node_id',
            'child_rules_node_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
