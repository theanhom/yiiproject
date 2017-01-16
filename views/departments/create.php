<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Departments */

$this->title = 'Create Departments';
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-create">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <div class="panel-primary">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-pencil"></i> เพิ่มหน่วยงาน</h4></div>
        <div class="panel-body">
            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>
        </div>
    </div>

</div>
