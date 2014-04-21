<?php
namespace app\modules\admin;

use yii\base\Module;
use yii\base\Event;
use Yii;

class Admin extends Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';
    public $defaultRoute = 'backend';
    public $layout = 'admin';

    public function init()
    {
        return parent::init();
    }

}
