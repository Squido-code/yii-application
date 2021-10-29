<?php
$params = null;
if (YII_ENV_DEV) {
    $params = array_merge(
        require __DIR__ . '/../../common/config/params-local.php',
        require __DIR__ . '/params-local.php'
    );
} else {
    $params = array_merge(
        require __DIR__ . '/../../common/config/params.php',
        require __DIR__ . '/params.php'
    );
}

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'user' => [
            'class' => Da\User\Module::class,
            'administratorPermissionName' => 'admin',
            'rememberLoginLifespan' => 1,
            'classMap' => [
                'User' => frontend\models\User::class,
                'RegistrationForm'=>frontend\models\RegistrationForm::class,
            ],
            'controllerMap' => [
                'security' => [
                    'class' => Da\User\Controller\SecurityController::class,
                    'on beforeAuthenticate' => ['app\components\SocialNetworkHandler', 'beforeAuthenticate'],
                ],
            ],
        ],
        'utility' => [
            'class' => 'c006\utility\migration\Module',
        ],
    ],
    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@Da/User/resources/views' => '@app/views/user'
                ]
            ]
        ],
        'authManager' => [
            'class' => 'Da\User\Component\AuthDbManagerComponent',
        ],
        'request' => [
            'cookieValidationKey' => '_91xtsX68YrtsiEKtCE6cUUyoskmfrC0',
            'csrfParam' => '_csrf-frontend',
            'enableCsrfValidation' => false,
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'flushInterval' => 100,
            'targets' => [
//                [
//                    'class' => 'yii\log\FileTarget',
//                    'levels' => ['error', 'warning', 'trace'],
//                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning', 'info'],
                    'logVars' => [],
                    'categories' => [],
                    'except' => [
                        'yii\db\*',
                    ],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'Google' => [
                    'class' => 'Da\User\AuthClient\Google',
                    'clientId' => $params['google_client_id'],
                    'clientSecret' => $params['google_client_secret']
                ]
            ]
        ],
    ],
    'params' => $params,

];
