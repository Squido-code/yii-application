<?php

namespace frontend\controllers;

use Yii;

class StripeController extends \yii\web\Controller
{

    public function actionStripeCheckOut()
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


}