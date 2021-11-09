<?php

namespace frontend\controllers;

use Da\User\Model\User;
use Yii;

class UserPanelController extends \yii\web\Controller
{
    public $user;

    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('site/index');
        } else {
            $user_id = Yii::$app->user->id;
            $this->user = User::find()->where(['id' => $user_id])->one();
            $this->layout = '@app/views/layouts/private';
            return true;
        }
    }

    public function actionIndex()
    {
        return $this->render('private', ['user' => $this->user]);
    }


}