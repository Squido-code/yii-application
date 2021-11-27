<?php

namespace app\models;

use Da\User\Model\User;
use Yii;

/**
 * This is the models class for table "user_billing".
 *
 * @property int $id
 * @property int $user_id
 * @property string $stripe_customer
 * @property int $sub_active
 * @property string $sub_type
 *
 * @property User $user
 */
class UserBilling extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_billing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'stripe_customer'], 'required'],
            [['user_id', 'sub_active'], 'integer'],
            [['stripe_customer'], 'string', 'max' => 100],
            [['sub_type'], 'string', 'max' => 50],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'stripe_customer' => 'Stripe Customer',
            'sub_active' => 'Sub Active',
            'sub_type' => 'Sub Type',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public static function getCustomer()
    {
        $id = Yii::$app->user->id;
        $model = self::findOne(['user_id' => $id]);
        return $model->stripe_customer;
    }

    public static function getSubscription()
    {
        $id = Yii::$app->user->id;
        $model = self::findOne(['user_id' => $id]);
        if (isset($model)) {
            if ($model->sub_type !== "") {

                return self::subscriptionIdToName($model->sub_type);
            }
        }
        return null;
    }

    private static function subscriptionIdToName($id)
    {
        switch ($id) {
            case Yii::$app->params['id_sub_1']:
                return Yii::$app->params['sub_name_1'];
            case Yii::$app->params['id_sub_2']:
                return Yii::$app->params['sub_name_2'];
            case Yii::$app->params['id_sub_3']:
                return Yii::$app->params['sub_name_3'];
        }
        return null;
    }
}
