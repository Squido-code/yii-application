<?php

namespace frontend\controllers;


use common\models\User;

class PruebasController extends \yii\web\Controller
{
    public function actionPrueba()
    {
        $model = User::findOne('1');

        $model->getBilling('1');
        echo print_r($model);
        exit;
        $model->sub_type = 'silver';
        $model->save();
    }
}