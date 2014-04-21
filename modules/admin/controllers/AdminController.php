<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\HttpException;
use yii\web\Controller;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\Security;

class AdminController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => 'yii\filters\AccessControl',
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
}
