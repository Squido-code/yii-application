<?php

namespace frontend\controllers;

use app\models\UserBilling;
use Yii;

class WebhookController extends \yii\web\Controller
{

    public function actionStripe()
    {
        $endpoint_secret = null;
        if (YII_ENV_DEV) {
            $endpoint_secret = 'whsec_hPsv8CHR5j1F1qYEssBiriOXzgLnYL9E';
        } else {
            $endpoint_secret = Yii::getAlias('stripe_webhook');
        }


        $payload = Yii::$app->request->getRawBody();


        Yii::info('WEBHOOK TRIGERED');
        Yii::info(Yii::$app->request);

        $headers = Yii::$app->request->headers;
        $sig_header = $headers->get('stripe-signature');
        $event = null;

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload, $sig_header, $endpoint_secret
            );

        } catch (\UnexpectedValueException $e) {
            // Invalid payload
            Yii::info('UnexpectedValueException: ' . $e);
            Yii::$app->response->statusCode = 400;
            exit();
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Invalid signature
            Yii::info('SignatureVerificationException: ' . $e);
            Yii::$app->response->statusCode = 400;
            exit();
        }

// Handle the event


        switch ($event->type) {
            case 'checkout.session.completed':
                Yii::info('ENTRA EN :' . 'checkout.session.completed');

                $paymentIntent = $event->data->object;
                $userId = $paymentIntent->client_reference_id;
                $customerId = $paymentIntent->customer;


                $model = UserBilling::findOne(['user_id' => $userId]);
                if (!isset($model)) {
                    $model = new UserBilling();
                    $model->user_id = $userId;
                    $model->stripe_customer = $customerId;
                }
                $model->stripe_customer = $customerId;
                $model->save();

                break;
            case 'customer.subscription.updated':
                Yii::info('ENTRA EN :' . 'customer.subscription.updated');
                $paymentIntent = $event->data->object;
                $subscription = $paymentIntent->plan->id;
                $customerId = $paymentIntent->customer;

                $model = UserBilling::findOne(['stripe_customer' => $customerId]);
                $model->sub_type = $subscription;
                $model->sub_active = 1;
                $model->save();
                break;
            default:
                Yii::debug('Received unknown event type ' . $event->type);
        }

        Yii::$app->response->statusCode = 200;
    }



}