<?php

namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        '/ckeditor/ckeditor.js',
        '/ckeditor/init.js',
    ];
    public $depends = [
        'yiister\gentelella\assets\Asset',
    ];
}
