<?php
namespace app\models\product;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $youtube_src [varchar(255)]
 * @property string $screencast_description [varchar(255)]
 * @property string $theory
 * @property string $instructions
 * @property string $created_at [datetime]
 * @property string $updated_at [datetime]
 * @property int $created_by [int(11)]
 * @property int $updated_by [int(11)]
 */
class Product extends ActiveRecord
{
    /** @inheritDoc */
    public static function tableName()
    {
        return '{{%product}}';
    }

    /** @inheritDoc */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'description'], 'required'],
            [
                [
                    'name',
                    'description',
                    'youtube_src',
                    'screencast_description',
                    'theory',
                    'instructions',
                ],
                'string'
            ],
        ];
    }

    /** @inheritDoc */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => (new \DateTime('now'))->format('Y-m-d H:i:s'),
            ],
            [
                'class' => BlameableBehavior::class,
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
        ];
    }
}
