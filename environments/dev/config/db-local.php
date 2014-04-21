<?php
/**
 * В этом файле размещаются настройки БД для конкретного хоста
 **/
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=HOST;dbname=DBNAME',
    'username' => 'DBUSER',
    'password' => 'DBPASSWORD',
    'charset' => 'utf8',
    'tablePrefix' => 'tbl_',
];

