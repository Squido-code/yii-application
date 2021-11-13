<?php

namespace frontend\controllers;

use app\models\UserBilling;
use Da\User\Model\User;
use Yii;

class UserPanelController extends \yii\web\Controller
{
    public $user;

    /** control the access to the user panel allowing only to login users
     * @param \yii\base\Action $action
     * @return bool|\yii\web\Response
     */
    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/user/login', 302)->send();
        } else {
            $user_id = Yii::$app->user->id;
            $this->user = User::find()->where(['id' => $user_id])->one();
            $this->layout = '@app/views/layouts/private';
            return true;
        }
    }

    /**
     * Render user panel index
     * @return string
     */
    public function actionIndex()
    {
        $subscription = UserBilling::getSubscription();
        return $this->render('index', ['subscription' => $subscription]);
    }

    public function actionProfile()
    {
        $subscription = UserBilling::getSubscription();
        return $this->render('profile', ['subscription' => $subscription]);
    }

    public function actionSubscriptions()
    {
        $payment = Yii::$app->request->get('payment');
        if (isset($payment)) {
            switch ($payment) {
                case 'success':
                    Yii::$app->session->setFlash('success', 'Payment success');
                    return $this->redirect('index')->send();
                case 'cancel':
                    Yii::$app->session->setFlash('error', 'Payment cancelled');
                    break;
            }
        }
        return $this->render('subscriptions');
    }

}