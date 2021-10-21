<?php

namespace app\models;


use Da\User\Model\User;
use Yii;

/**
 * This is the model class for table "user_billing".
 *
 * @property int $id
 * @property int $user_id
 * @property int $sub_active
 * @property string $sub_type
 *
 * @property User $user
 */
class UserSubscriptions extends \yii\db\ActiveRecord
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
            [['user_id', 'sub_active', 'sub_type'], 'required'],
            [['user_id', 'sub_active'], 'integer'],
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
            'sub_active' => 'Sub Active',
            'sub_type' => 'Sub Type',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return UserSubscriptions|\yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public static function updateBilling($id, $subscription)
    {
        Yii::info('Entra en update billing id: ' . $id . ' Subscripcion: ' . $subscription);
        $model = UserSubscriptions::findOne(['user_id' => $id]);
        if (!isset($model)) {
            $model = new UserSubscriptions();
            $model->user_id = $id;
        }
        $model->sub_type = $subscription;
        $model->sub_active = '1';
        $model->save();

    }

    public static function getSubscription()
    {
        $id = Yii::$app->user->id;
        $model = UserSubscriptions::findOne(['user_id' => $id]);
        if ($model !== null) {
            return $model->sub_type;
        }
        return null;
    }

}
