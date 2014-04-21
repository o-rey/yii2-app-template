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
$this->title = 'Password reset';
$this->context->layout = 'blank';
?>
<h1 class="header"><span><span><?= $this->title ?></span></span></h1>
<h4>Enter your registration email</h4>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'email')->textInput(); ?>
<button type="submit" class="btn btn-warning">Reset password</button>
<?php ActiveForm::end(); ?>
