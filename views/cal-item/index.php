<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CalItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cal Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cal-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cal Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tool_id',
            'result',
            'number_group',
            'numberpas',
            // 'department_id',
            // 'cal_id',
            // 'remark',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
