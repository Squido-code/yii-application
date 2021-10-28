<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'prod');

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../../common/config/bootstrap.php';
require __DIR__ . '/../config/bootstrap.php';


if (YII_ENV_DEV) {
    $config = yii\helpers\ArrayHelper::merge(
        require __DIR__ . '/../../common/config/main-local.php',
        require __DIR__ . '/../config/main.php'
    );
} else {
    $config = yii\helpers\ArrayHelper::merge(
        require __DIR__ . '/../../common/config/main.php',
        require __DIR__ . '/../config/main.php'
    );
}


(new yii\web\Application($config))->run();
