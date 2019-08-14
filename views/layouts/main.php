<?php
/* @var $this \yii\web\View */
/* @var $content string */

\humhub\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <title><?= strip_tags($this->pageTitle); ?></title>
	 <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <?php $this->head() ?>
        <?= $this->render('head'); ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
	
	<!-- start: Alert -->
<div>(<?php Yii::$app -> user;?></div>
<?php if(!Yii::$app -> user -> isGuest && Yii::$app->user->getCurrentAuthClient() != null && Yii::$app->user->getCurrentAuthClient()->getId() == "itsyouonline") :  ?>
	<div class="alert alert-danger alert-dismissible" role="alert" style="position: fixed; bottom:0; width: 100%; color:#fff; background-color: #a23e3d; border-color: #a23e3d; margin-bottom: 0; border-radius: 0; text-align: center; z-index: 999; font-size: 18px;">
 		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  			You're logged in using itsyou.online. Please <a href="/user/account/connected-accounts"><strong style="color: #fff;">Link</strong></a> your 3bot account since itsyou.online login support ends soon
			</div>
<?php endif; ?>
        <!-- end: Alert -->

        <!-- start: first top navigation bar -->
        <div id="topbar-first" class="topbar">
            <div class="container">
                <div class="topbar-brand hidden-xs">
                    <?= \humhub\widgets\SiteLogo::widget(); ?>
                </div>

                <div class="topbar-actions pull-right">
                    <?= \humhub\modules\user\widgets\AccountTopMenu::widget(); ?>
                </div>

                <div class="notifications pull-right">
                    <?= \humhub\widgets\NotificationArea::widget(); ?>
                </div>
            </div>
        </div>
	<!-- end: first top navigation bar -->

	<!-- start: Alert -->
	<!--<div class="alert alert-danger" role="alert">...</div>-->
	<!-- end: Alert -->

 	<!-- start: second top navigation bar -->
	<?php if(!Yii::$app->user->isGuest) :?>
        <div id="topbar-second" class="topbar">
            <div class="container">
                <ul class="nav" id="top-menu-nav">
                    <!-- load space chooser widget -->
                    <?= \humhub\modules\space\widgets\Chooser::widget(); ?>

                    <!-- load navigation from widget -->
                    <?= \humhub\widgets\TopMenu::widget(); ?>
                </ul>

                <ul class="nav pull-right" id="search-menu-nav">
                    <?= \humhub\widgets\TopMenuRightStack::widget(); ?>
                </ul>
            </div>
        </div>

         <?php endif; ?>

	<!-- end: second top navigation bar -->
	<?= $content; ?>

	<script src="<?= $this->theme->getBaseUrl(); ?>/js/preprocess.js"></script>
	<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
