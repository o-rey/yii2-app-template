<?php
    $r = Yii::$app->urlManager;
?>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
    <h1>Регистрационные данные.</h1>
    <p><b>Уважаемый(ая) <?= $user->name ?>!</b><p>
    <p>Вы были зарегистрированы на сайте &laquo;<?= Yii::$app->name ?>&raquo;.</p>
    <p>Ваши данные для входа:</p>
    <p>
        Логин: <b><?= $user->email ?></b><br/>
        Пароль: <b><?= $user->password ?></b><br/>
    </p>
    <p>Авторизоваться Вы можете <a href="<?= $r->createAbsoluteUrl('/admin/backend/login') ?>">здесь.</a></p>

    <hr />
    <i>
        С уважением,<br>
        Администрация сайта <?= Yii::$app->name ?>.
    </i>
</body>
</html>
