<?php

namespace frontend\controllers;


use app\models\UserSubscriptions;

class PruebasController extends \yii\web\Controller
{
    public function actionPrueba()
    {
//        $model = new UserSubscriptions();
//        $model->user_id ='2';
//        $model->sub_type = 'bronze';
//        $model->sub_active = '1';
//        $model = UserSubscriptions::findOne(['user_id'=>'3']);

//        $model = UserSubscriptions::findOne(['user_id'=>'2']);
//        if(!isset($model)){
//            $model = new UserSubscriptions();
//            $model->user_id = '2';
//        }
//        $model->sub_type = 'prueba';
//        $model->sub_active = '1';
//        $model->save();
        $userId = '2';
        $subscription = 'pruebas';
        if (isset($userId) && isset($subscription)) {
            UserSubscriptions::updateBilling($userId, $subscription);
        }
//        $model = UserSubscriptions::findOne(['user_id'=>$id]);
//        if(!isset($model)){
//            $model = new UserSubscriptions();
//            $model->user_id = $id;
//        }
//        $model->sub_type = $subscription;
//        $model->sub_active = '1';
//        $model->save();
//
//        echo print_r($model); exit;
//        $model->save();
    }
}