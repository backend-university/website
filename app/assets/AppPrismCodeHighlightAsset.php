<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Добавление подсветки кода в статье, если она была добавлена ckeditor'ом
 */
class AppPrismCodeHighlightAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/ckeditor/plugins/prism/lib/prism/prism_patched.min.css',
    ];
    public $js = [
        '/ckeditor/plugins/prism/lib/prism/prism_patched.min.js',
    ];
}
