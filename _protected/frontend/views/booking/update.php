<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Booking */

$this->title = 'แก้ไขการจอง: ' . $model->Bid;
$this->params['breadcrumbs'][] = ['label' => 'การจอง', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Bid, 'url' => ['view', 'id' => $model->Bid]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="booking-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
