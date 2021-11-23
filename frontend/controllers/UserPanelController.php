<?php

namespace frontend\controllers;

use app\models\UserBilling;
use Yii;
use yii\filters\AccessControl;

class UserPanelController extends \yii\web\Controller
{
    public $layout = 'private';

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

    /**
     * Render user panel index
     * @return string
     */
    public function actionIndex()
    {
        $subscription = UserBilling::getSubscription();
        return $this->render('index', ['subscription' => $subscription]);
    }

    /**
     * Render user login information and the current subscription plan
     * @return string
     */
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