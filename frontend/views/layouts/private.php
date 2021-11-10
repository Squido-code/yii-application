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
    <!--navbar-->
    <?php include 'common/private_navbar.php' ?>
    <!--/navbar-->
    <!--content-->
    <div class="page-content">
        <?php include 'common/private_sidebar.php' ?>
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Inner content -->
            <div class="content-inner">
                <?= $content ?>
                <!--footer-->
                <?php include 'common/main_footer.php' ?>
            </div>
        </div>
    </div>
    <!--footer-->
    <?php //include 'common/main_footer.php' ?>
    <!--end body-->
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
