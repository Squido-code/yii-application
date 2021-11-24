<?php

namespace frontend\controllers;

use app\models\UserBilling;
use yii\filters\AccessControl;

class SubscripcionTresController extends \yii\web\Controller
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
        $subscription = null;

        if (!Yii::$app->user->isGuest) {
            $subscription = UserBilling::getSubscription();
            if ($subscription !== Yii::$app->params['sub_name_3']) {
                Yii::$app->session->setFlash('error', "Acceso denegado");
                return $this->goHome();
            }
        }
        return $this->subscription = $subscription;

    }

    public function actionGestion()
    {
        return $this->render('gestion');
    }

    public function actionEstadisticas()
    {
        return $this->render('estadisticas');
    }

    public function actionResumen()
    {
        return $this->render('resumen');
    }
}