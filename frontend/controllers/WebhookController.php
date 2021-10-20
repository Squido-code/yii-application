<?php

namespace frontend\controllers;

use app\models\UserBillingModel;
use Yii;

class WebhookController extends \yii\web\Controller
{

    public function actionStripe()
    {

        //secrete key whsec_hPsv8CHR5j1F1qYEssBiriOXzgLnYL9E

// This is your Stripe CLI webhook secret for testing your endpoint locally.
        $endpoint_secret = 'whsec_hPsv8CHR5j1F1qYEssBiriOXzgLnYL9E';

        $payload = Yii::$app->request->post();

        Yii::debug('WEBHOOK TRIGERED');
        $headers = Yii::$app->request->headers;
        $sig_header = $headers->get('HTTP_STRIPE_SIGNATURE');
        $event = null;

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload, $sig_header, $endpoint_secret
            );
        } catch (\UnexpectedValueException $e) {
            // Invalid payload
//            http_response_code(400);
            Yii::$app->response->statusCode = 400;
            exit();
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Invalid signature
//            http_response_code(400);
            Yii::$app->response->statusCode = 400;
            exit();
        }

// Handle the event

        $userId = null;
        $subscription = null;

        switch ($event->type) {
            case 'checkout.session.completed':
                $paymentIntent = $event->data->object;
                $userId = $paymentIntent->client_reference_id;

                // ... handle other event types
                break;
            case 'customer.subscription.updated':
                $paymentIntent = $event->data->object;
                $subscription = $this->getSubscripcion($paymentIntent->plan->id);
                break;
            default:
                echo 'Received unknown event type ' . $event->type;
        }

        $this->updateUser($userId, $subscription);

        Yii::$app->response->statusCode = 200;
    }

    private function getSubscripcion($amount)
    {

        switch ($amount) {
            case 'price_1JkTrrEsSA3dVfnSyREFJQWZ':
                return 'bronze';

            case 'price_1JkoxuEsSA3dVfnSWcrN2bTw':
                return 'silver';

            case'price_1JkoydEsSA3dVfnSra8L6HsT':
                return 'gold';
        }
        return null;
    }

    private function updateUser($id, $subscripcion)
    {


        $model = UserBillingModel::findOne('$id');

        $model->getUser();
        $model->sub_type = $subscripcion;
        $model->save();
    }

}