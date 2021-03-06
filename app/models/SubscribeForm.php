<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 *
 */
class SubscribeForm extends Model
{
    public $email;
    public $subscribed;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            ['email', 'email'],
        ];
    }

    /**
     *
     */
    public function subscribe()
    {
        if ($this->validate()) {
            $this->subscribed = WebsiteSubscription::find()->where(['email' => $this->email])->exists();
            if (!$this->subscribed) {
                $sub = new WebsiteSubscription(['email' => $this->email]);
                $this->subscribed = $sub->save();

                Yii::$app->getMailer()->compose()
                    ->setFrom(Yii::$app->params['senderEmail'])
                    ->setTo(Yii::$app->params['adminEmail'])
                    ->setSubject('Новая подписка')
                    ->setTextBody("from: {$this->email}");
            }

            return true;
        }
        return false;
    }
}
