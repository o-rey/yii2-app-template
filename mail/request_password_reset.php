<?php
    use yii\helpers\Html;
use yii\helpers\Url;
    $r = Yii::$app->urlManager;
?>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
    <p><b>Уважаемый(ая) <?= Html::encode($user->name) ?>!</b><p>
    <p>Для смены пароля пройдите по <a href="<?= $r->createAbsoluteUrl('/admin/backend/reset-password', array('token' => $user->password_reset_token)) ?>">ссылке.</a></p>

    <hr />
    <i>
        С уважением,<br>
        Администрация сайта <?= Yii::$app->name ?>.
    </i>
</body>
</html>
