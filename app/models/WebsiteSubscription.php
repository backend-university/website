<?php

namespace app\models;

use DateTime;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%website_subscription}}".
 *
 * @property int $id
 * @property string $email
 * @property string $date
 */
class WebsiteSubscription extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%website_subscription}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['email'], 'string', 'max' => 255],
            [['email'], 'email'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'date' => 'Date',
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'date',
                'updatedAtAttribute' => null,
                'value' => (new DateTime('now'))->format('Y-m-d H:i:s'),
            ],
        ];
    }
}
