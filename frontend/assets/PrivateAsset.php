<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class PrivateAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'global_assets/css/icons/icomoon/styles.min.css',
        'assets/css/all.min.css',
    ];
    public $js = [
        'global_assets/js/main/jquery.min.js',
        'global_assets/js/main/bootstrap.bundle.min.js',
        'assets/js/app.js'
    ];
    public $depends = [
//        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}