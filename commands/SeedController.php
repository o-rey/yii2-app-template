<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SeedController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionIndex()
    {
        echo "Administrator email:\n";
        $email = trim(fgets(STDIN));

        echo "Administrator name:\n";
        $name = trim(fgets(STDIN));

        echo "Administrator password:\n";
        $password = trim(fgets(STDIN));

        $data = [
            'email'       => $email,
            'name'        => $name ?: $email,
            'username'    => $email,
            'password'    => $password,
            'role'        => 'godmode',
            'is_disabled' => 0,
        ];

        $user = \app\models\User::create($data);

        if ($user) {
            echo "Administrator created\n";
        } else {
            echo "Error creating administrator:";
        }
    }
}
