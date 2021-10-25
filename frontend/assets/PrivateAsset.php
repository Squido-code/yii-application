<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class PrivateAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/private.css',
    ];
    public $js = [
    ];
    public $depends = [
//        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}