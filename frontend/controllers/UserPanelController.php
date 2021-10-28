<?php

namespace frontend\controllers;

use Da\User\Model\User;
use Yii;

class UserPanelController extends \yii\web\Controller
{
    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest) {
//            echo print_r('entra'); exit();

            return $this->redirect('site/index');
        } else {
            return $this->layout = 'private';
        }


    }

    public function actionIndex()
    {
        $user_id = Yii::$app->user->id;
        $user = User::find()->where(['id' => $user_id])->one();
        return $this->render('index', ['user' => $user]);
    }


}