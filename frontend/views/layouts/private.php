<?php

use frontend\assets\PrivateAsset;

PrivateAsset::register($this)
?>
<?php $this->beginPage() ?>
    <!--head-->
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <?php include 'common/private_head.php' ?>
<!--    END HEAD-->
    <!--begin body-->
    <body>
    <?php $this->beginBody() ?>
    <!--header-->

    <?php include 'common/private_header.php' ?>
<!--    /header-->
    <!--content-->
    <main role="main" class="flex-shrink-0">
            <?= $content ?>
    </main>
    <!--footer-->
<?php //include 'common/main_footer.php' ?>
    <!--end body-->
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
