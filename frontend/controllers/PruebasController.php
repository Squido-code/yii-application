<?php

namespace frontend\controllers;


use app\models\UserSubscriptionsDeprecated;

class PruebasController extends \yii\web\Controller
{
    public function actionPrueba()
    {
//        $models = new UserSubscriptionsDeprecated();
//        $models->user_id ='2';
//        $models->sub_type = 'bronze';
//        $models->sub_active = '1';
//        $models = UserSubscriptionsDeprecated::findOne(['user_id'=>'3']);

//        $models = UserSubscriptionsDeprecated::findOne(['user_id'=>'2']);
//        if(!isset($models)){
//            $models = new UserSubscriptionsDeprecated();
//            $models->user_id = '2';
//        }
//        $models->sub_type = 'prueba';
//        $models->sub_active = '1';
//        $models->save();
        $userId = '2';
        $subscription = 'pruebas';
        if (isset($userId) && isset($subscription)) {
            UserSubscriptionsDeprecated::updateBilling($userId, $subscription);
        }
//        $models = UserSubscriptionsDeprecated::findOne(['user_id'=>$id]);
//        if(!isset($models)){
//            $models = new UserSubscriptionsDeprecated();
//            $models->user_id = $id;
//        }
//        $models->sub_type = $subscription;
//        $models->sub_active = '1';
//        $models->save();
//
//        echo print_r($models); exit;
//        $models->save();
    }
}