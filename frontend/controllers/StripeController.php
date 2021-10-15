<?php

namespace frontend\controllers;

use Yii;

class StripeController extends \yii\web\Controller
{

    public function actionDonacion()
    {
        require "../../vendor/autoload.php";

        $stripe = new \Stripe\StripeClient(
            Yii::$app->params['stripeApiKey']
        );

        $session = $stripe->checkout->sessions->create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Donacion',
                    ],
                    'unit_amount' => 100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => 'https://practicas.com/success',
            'cancel_url' => 'https://practicas.com/cancel',
        ]);

        return json_encode($session);

    }

    public function actionBronze()
    {
//        echo print_r(Yii::$app->user->id);exit;
        require "../../vendor/autoload.php";

        $stripe = new \Stripe\StripeClient(
            Yii::$app->params['stripeApiKey']
        );
//        $stripe->customers->create([
//            'description' => 'My First Test Customer (created for API docs)',
//        ]);

        $session = $stripe->checkout->sessions->create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price' => 'price_1JkTrrEsSA3dVfnSyREFJQWZ',
                'quantity' => 1,
            ]],
            'client_reference_id' => Yii::$app->user->id,
            'mode' => 'subscription',
            'success_url' => 'https://practicas.com/stripe/success',
            'cancel_url' => 'https://practicas.com/stripe/cancel',
        ]);

        return json_encode($session);

    }

    public function actionSuccess()
    {
        return $this->render('success');
    }

    public function actionCancel()
    {
        return $this->render('cancel');
    }


}