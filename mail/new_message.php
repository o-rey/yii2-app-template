<?php
    $r = Yii::$app->urlManager;
?>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
    <h1>Новое сообщение на сайте &laquo;<?= Yii::$app->name ?>&raquo;.</h1>
    <p>Пользователь <?= $record->name ?> (<a href="mailto:<?= $record->email ?>"><?= $record->email ?></a>) отправил сообщение:</p>
    <p><?= $record->description ?></p>

    <hr />
    <i>
        С уважением,<br>
        Администрация сайта <?= Yii::$app->name ?>.
    </i>
</body>
</html>
