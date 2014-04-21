<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = \Yii::t('app', 'Account');

?>
<div class="row">
    <div class="col-sm-12 col-md-10 col-lg-8">
        <h3><?= $this->title ?></h3>
        <?php $form = ActiveForm::begin(); ?>
            <?= Html::activeHiddenInput($record, 'id') ?>
            <?= $form->field($record, 'name')->textInput(); ?>
            <?= $form->field($record, 'email')->textInput(); ?>
            <?= $form->errorSummary($record); ?>
            <hr>
            <button type="submit" class="btn btn-primary"><?= \Yii::t('app', 'Save') ?></button>
        <?php ActiveForm::end(); ?>
    </div>
</div>
