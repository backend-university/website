<?php

namespace app\admin\common;

/**
 * admin module definition class
 */
abstract class AdminModule extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->layoutPath = \Yii::getAlias('@app/admin/views/layouts');
        $this->layout = 'main.php';
    }
}
