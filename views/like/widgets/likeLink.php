<?php

use yii\helpers\Html;

humhub\modules\like\assets\LikeAsset::register($this);
?>

<span class="likeLinkContainer" id="likeLinkContainer_<?= $id ?>">

    <?php if (Yii::$app->user->isGuest): ?>
	<a href="/user/auth/login" onclick="location='/user/auth/login'">Like</a>
    <?php else: ?>
        <a href="#" data-action-click="like.toggleLike" data-action-url="<?= $likeUrl ?>" class="like likeAnchor" style="<?= (!$currentUserLiked) ? '' : 'display:none'?>">
            <?= Yii::t('LikeModule.widgets_views_likeLink', 'Like') ?>
        </a>
        <a href="#" data-action-click="like.toggleLike" data-action-url="<?= $unlikeUrl ?>" class="unlike likeAnchor" style="<?= ($currentUserLiked) ? '' : 'display:none'?>">
            <?= Yii::t('LikeModule.widgets_views_likeLink', 'Unlike') ?>
        </a>
    <?php endif; ?>

    <?php if (count($likes) > 0) { ?>
	<!-- Create link to show all users, who liked this -->
        <?php if (!Yii::$app->user->isGuest): ?>
		<a href="<?php echo $userListUrl; ?>" data-target="#globalModal">
 	<?php endif; ?>
            <span class="likeCount tt" data-placement="top" data-toggle="tooltip" title="<?= $title ?>">(<?= count($likes) ?>)</span>
        </a>
    <?php } else { ?>
        <span class="likeCount"></span>
    <?php } ?>

</span>
