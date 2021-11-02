<header>
    <?php

    use app\models\UserBilling;
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
        ['label' => 'User panel', 'url' => ['/user-panel/index']],
    ];
    if (UserBilling::getSubscription() !== null) {
        switch (UserBilling::getSubscription()) {
            case Yii::$app->params['idSubBronze']:
                $menuItems[] = ['label' => 'Ventajas Bronze', 'url' => ['/subcripcion/bronze']];
                break;
            case Yii::$app->params['idSubSilver']:
                $menuItems[] = ['label' => 'Ventajas Silver', 'url' => ['/subcripcion/silver']];
                break;
            case Yii::$app->params['idSubGold']:
                $menuItems[] = ['label' => 'Ventajas Gold', 'url' => ['/subcripcion/gold']];
                break;
        }
    }
    $menuItems[] = '<li>'
        . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
        . Html::submitButton(
            'Logout (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn btn-link logout']
        )
        . Html::endForm()
        . '</li>';

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</header>
