<?php

use yii\db\Migration;

/**
 * Class m190916_064351_create_website_subscription
 */
class m190916_064351_create_website_subscription extends Migration
{
    private $table = '{{%website_subscription}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            'email' => $this->string(),
            'date' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->table);
    }
}
