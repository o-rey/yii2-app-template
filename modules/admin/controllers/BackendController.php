<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\HttpException;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\helpers\Security;
use app\modules\admin\models\LoginForm;
use app\models\User;


class BackendController extends AdminController
{
    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'access' => [
                'except' => ['login', 'logout', 'request-password-reset', 'reset-password'],
            ],
        ]);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionProfile()
    {
        $record = User::findOne(Yii::$app->user->id);

        if (!$record) {
            throw new HttpException(404);
        }

        if ($record->load($_POST)) {
            if ($record->save()) {
                Yii::$app->session->setFlash('success', 'Saved');
                return $this->redirect(Url::toRoute(['profile']));
            } else {
                Yii::$app->session->setFlash('error', 'Error saving data');
            }
        }

        return $this->render('profile', [
            'record' => $record,
        ]);
    }

    public function actionLogin()
    {
        $model = new LoginForm();

        if ($model->load($_POST)) {
            if ($model->login()) {
                Yii::$app->session->setFlash('success', 'Logged in');
                return $this->redirect(Url::toRoute(['index']));
            } else {
                Yii::$app->session->setFlash('error', 'Error');
            }
        }

        return $this->render('login', array(
            'model' => $model,
        ));
    }

    public function actionLogout()
    {
        Yii::$app->getUser()->logout();
        Yii::$app->session->setFlash('success', 'Logged out');
        Yii::$app->getResponse()->redirect(Url::toRoute(['login']));
    }

    public function actionRequestPasswordReset()
    {
        $model = new \app\modules\admin\models\PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new \app\modules\admin\models\ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

}
