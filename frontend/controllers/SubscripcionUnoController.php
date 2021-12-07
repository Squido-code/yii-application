<?php

namespace frontend\controllers;

use app\models\UserBilling;
use Yii;
use yii\filters\AccessControl;

class SubscripcionUnoController extends \yii\web\Controller
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

    /**
     * Function checks before load if the user has the right subscription
     * @param \yii\base\Action $action
     * @return bool|mixed|null
     */
    public function beforeAction($action)
    {
        $subscription = null;

        if (!Yii::$app->user->isGuest) {
            $subscription = UserBilling::getSubscription();
            if ($subscription !== Yii::$app->params['sub_name_1']) {
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