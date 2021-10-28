<?php

use common\widgets\Alert;
use frontend\assets\PrivateAsset;
use yii\bootstrap4\Breadcrumbs;

PrivateAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!--head-->
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <?php include 'common/main_head.php' ?>
    <!--begin body-->
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <!--header-->
    <?php include 'common/main_header.php' ?>
    <!--content-->
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>
    <!--footer-->
    <?php include 'common/main_footer.php' ?>
    <!--end body-->
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
