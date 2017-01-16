<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DepartmentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'แผนก';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-index">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-pencil"></i> เพิ่มข้อมูล', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<!--    ตกแต่ง panel หน้าจอให้สวยงาม-->
    <div class="panel panel-default">
        <div class="panel-heading"> หน่วยงาน</div>
        <div class="panel-body">
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            //'group_id',
            //'depgroup.name',//เอาความสัมพันธ์ตั้ง ตามด้วยฟิลด์ที่จะแสดง
            [
              'attribute'=>'group_id',//ทำให้สามารถค้นหาได้
              'value'=>'depgroup.name',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div>
    </div>
    
</div>
