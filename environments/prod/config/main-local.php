<?php
/**
 * В этом файле размещаются настройки веб-приложения для конкретного хоста
 **/
return [
    'components' => [
        'cache' => [
            'class' => 'yii\caching\ApcCache',
        ],
        'log' => [
            'traceLevel' => 3,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],

    ],
];

