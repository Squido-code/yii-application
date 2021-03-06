<header>
    <?php

    use yii\bootstrap4\Html;
    use yii\bootstrap4\Nav;
    use yii\bootstrap4\NavBar;

    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],

    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/user/register']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/user/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
//        $menuItems[] = ['label' => 'User panel', 'url' => ['/user-panel/index']];
//        if (UserBilling::getSubscription() !== null) {
//            switch (UserBilling::getSubscription()) {
//                case Yii::$app->params['sub_name_1']:
//                    $menuItems[] = ['label' => 'Ventajas Bronze', 'url' => ['/subscripcion/bronze']];
//                    break;
//                case Yii::$app->params['sub_name_2']:
//                    $menuItems[] = ['label' => 'Ventajas Silver', 'url' => ['/subscripcion/silver']];
//                    break;
//                case Yii::$app->params['sub_name_3']:
//                    $menuItems[] = ['label' => 'Ventajas Gold', 'url' => ['/subscripcion/gold']];
//                    break;
//            }
//        }
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</header>
