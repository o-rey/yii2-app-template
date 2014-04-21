<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/**
 * @var yii\base\View $this
 * @var yii\widgets\ActiveForm $form
 * @var app\models\LoginForm $model
 */
$this->title = \Yii::t('app', 'Set new password');
$this->context->layout = 'blank';
?>
<h1 class="header"><span><span><?= $this->title ?></span></span></h1>
<div class="row">
    <div class="col-lg-6">
        <h4><?= \Yii::t('app', 'Enter new password') ?></h4>
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'password')->passwordInput(); ?>
        <button type="submit" class="btn btn-success"><?= \Yii::t('app', 'Set new password') ?></button>
        <?php ActiveForm::end(); ?>
    </div>
</div>
