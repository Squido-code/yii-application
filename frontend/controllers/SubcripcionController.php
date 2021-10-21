<?php

namespace frontend\controllers;

class SubcripcionController extends \yii\web\Controller
{
    public function actionBronze()
    {
        return $this->render('sub_bronze');
    }

    public function actionSilver()
    {
        return $this->render('sub_silver');
    }

    public function actionGold()
    {
        return $this->render('sub_gold');
    }

}