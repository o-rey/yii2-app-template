<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var app\models\LoginForm $record
 */
$this->context->layout = 'blank';
$this->title = 'Sign in';

?>
<?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
                'template' => '{label}<div class="col-sm-10">{input}</div><div class="col-sm-10 col-sm-offset-2">{error}</div>',
                'labelOptions' => ['class' => 'col-sm-2 control-label'],
        ],
]); ?>
    <?= $form->field($model, 'email')->textInput(); ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'rememberMe', [
        'template' => '<div class="col-sm-offset-2 col-sm-10">{input}</div><div class="col-sm-12">{error}</div>',
    ])->checkbox() ?>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <button type="submit" class="btn btn-primary"><?= \Yii::t('app', 'Sign in') ?></button>
            <a href="<?= Url::toRoute(array('request-password-reset')) ?>" class="pull-right"><?= 'Remind password' ?></a>
        </div>
    </div>
<?php ActiveForm::end(); ?>
