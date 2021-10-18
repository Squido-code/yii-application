<?php

namespace frontend\controllers;

use Yii;

class StripeController extends \yii\web\Controller
{

    public function actionDonacion()
    {
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

    public function actionCheckout()
    {
        $productPrice = $this->getProduct(
            Yii::$app->request->get('subscription'));


        $stripe = new \Stripe\StripeClient(
            Yii::$app->params['stripeApiKey']
        );

        $session = $stripe->checkout->sessions->create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price' => $productPrice,
                'quantity' => 1,
            ]],
            'client_reference_id' => Yii::$app->user->id,
            'mode' => 'subscription',
            'success_url' => 'https://practicas.com/stripe/success',
            'cancel_url' => 'https://practicas.com/stripe/cancel',
        ]);

        return json_encode($session);

    }

    private function getProduct($id)
    {
        switch ($id) {
            case '1':
                return Yii::$app->params['idSubBronze'];

            case '2':
                return Yii::$app->params['idSubSilver'];

            case '3':
                return Yii::$app->params['idSubGold'];

        }
        return null;
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