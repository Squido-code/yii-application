<?php

namespace frontend\controllers;

use app\models\UserBilling;
use Error;
use Stripe\BillingPortal\Session;
use Stripe\Stripe;
use Yii;

class StripeController extends \yii\web\Controller
{
    private $urls = null;

    public $layout = 'private';

    public function init()
    {
        parent::init();
        $this->urls = $this->enviromentUrl();
    }

    public function actionClientSession()
    {
        Stripe::setApiKey(Yii::$app->params['stripeApiKey']);

        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'https://practicas.com/stripe/success';
        try {
//            $checkout_session = \Stripe\Checkout\Session::retrieve($_POST['session_id']);
            $return_url = $YOUR_DOMAIN;

//            // Authenticate your user.
//            $session = Session::create([
//                'customer' => $checkout_session->customer,
//                'return_url' => $return_url,
//            ]);
            // Authenticate your user.
            $session = Session::create([
                'customer' => UserBilling::getCustomer(),
                'return_url' => $return_url,
            ]);

            header("HTTP/1.1 303 See Other");
            header("Location: " . $session->url);

            return $this->redirect($session->url)->send();
        } catch (Error $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }

    }

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
            'success_url' => $this->urls['success_url'],
            'cancel_url' => $this->urls['cancel_url'],
        ]);
        return json_encode($session);
    }

    public function actionCheckout()
    {
        Yii::info("Stripe Checkout init");
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
            'success_url' => $this->urls['success_url'],
            'cancel_url' => $this->urls['cancel_url'],
        ]);

        return json_encode($session);

    }

    private function getProduct($id)
    {
        switch ($id) {
            case '1':
                return Yii::$app->params['id_sub_1'];

            case '2':
                return Yii::$app->params['id_sub_2'];

            case '3':
                return Yii::$app->params['id_sub_3'];

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

    /**
     * Return the right success/cancel url depending on the environment
     * @return string[]
     */
    private function enviromentUrl()
    {
        $urls = null;

        if (YII_ENV_DEV) {
            return $urls = [
                'success_url' => 'https://practicas.com/stripe/success',
                'cancel_url' => 'https://practicas.com/stripe/cancel',
            ];
        } else {
            return $urls = [
                'success_url' => 'https://test.maia.rocks/stripe/success',
                'cancel_url' => 'https://test.maia.rocks/user-panel/stripe/cancel',
            ];
        }
    }
}