<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use app\models\User;

/**
 * LoginForm is the model behind the login form.
 */
class LoginForm extends Model
{
    public $email;
    public $password;
    public $rememberMe = true;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return array(
            [['email', 'password'], 'required'],
            ['email', 'email'],
            ['rememberMe', 'boolean'],
        );
    }

    /**
     * Logs in a user using the provided username and password.
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            $user = User::findByEmail($this->email);
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError('password', 'Wrong password');

            } else {
                return Yii::$app->user->login($user, $this->rememberMe ? 3600*24*30 : 0);
            }
        }

        return false;
    }

    public function attributeLabels()
    {
        return array(
            'email'      => 'E-mail',
            'password'   => 'Password',
            'rememberMe' => 'Remember me',
        );
    }
}
