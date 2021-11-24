<?php

namespace frontend\controllers;

use app\models\UserBilling;
use Yii;
use yii\filters\AccessControl;

class UserPanelController extends \yii\web\Controller
{
    public $layout = 'private';
    public $subscription = null;

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ],
                ]
            ]
        ];
    }

    public function beforeAction($action)
    {
        if (!Yii::$app->user->isGuest) {
            return $this->subscription = UserBilling::getSubscription();
        }
        return null;
    }

    /**
     * Render user panel index
     * @return string
     */
    public function actionIndex()
    {

        return $this->render('index', ['subscription' => $this->subscription]);
    }

    /**
     * Render user login information and the current subscription plan
     * @return string
     */
    public function actionProfile()
    {
        return $this->render('profile', ['subscription' => $this->subscription]);
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

    public function actionMenu()
    {
        return $this->render('menu');
    }

    public function actionCaracteristicas()
    {
        return $this->render('caracteristicas');
    }


}