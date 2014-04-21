<?php
/**
 * Common for all environments
 **/

$params = array_merge(
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$db = require(__DIR__ . '/db-local.php');

return [
    'id' => 'app',
    'name' => 'AppName',
    'language' => 'ru',
    'charset' => 'utf-8',
    'basePath' => dirname(__DIR__),
    'vendorPath' => dirname(__DIR__) . '/vendor',
    'extensions' => require(__DIR__ . '/../vendor/yiisoft/extensions.php'),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\controllers',

    'defaultRoute' => 'site/index',

    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Admin',
        ],
    ],

    'components' => [
        'db' => $db,
        'user' => [
            'class' => 'yii\web\User',
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => '/admin/backend/login',
        ],
        'mail' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath'=>'@app/mail'
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'sourcePath' => null,
                    'js' => ['//code.jquery.com/jquery-1.11.0.min.js']
                ],
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'traceLevel' => 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],

    'params' => $params,
];

