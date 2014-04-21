<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php if (Yii::$app->user->checkAccess('editNews')): ?>
<li><a href="<?= Url::toRoute(['news/index']) ?>"><?= \Yii::t('app', 'News') ?></a></li>
<?php endif ?>

<?php if (Yii::$app->user->checkAccess('editPage')): ?>
<li><a href="<?= Url::toRoute(['page/index']) ?>"><?= \Yii::t('app', 'Site pages') ?></a></li>
<?php endif ?>

<?php if (Yii::$app->user->checkAccess('editBlock')): ?>
<li><a href="<?= Url::toRoute(['block/index']) ?>"><?= \Yii::t('app', 'Textblocks') ?></a></li>
<?php endif ?>

<?php if (Yii::$app->user->checkAccess('editMessage')): ?>
<li><a href="<?= Url::toRoute(['message/index']) ?>"><?= \Yii::t('app', 'Feedback') ?></a></li>
<?php endif ?>

<?php if (Yii::$app->user->checkAccess('editUser')): ?>
<li><a href="<?= Url::toRoute(['user/index']) ?>"><?= \Yii::t('app', 'Users') ?></a></li>
<?php endif ?>

<?php if (Yii::$app->user->checkAccess('editRegion')): ?>
<li><a href="<?= Url::toRoute(['region/index']) ?>"><?= \Yii::t('app', 'Regions') ?></a></li>
<?php endif ?>

<?php if (Yii::$app->user->checkAccess('editMeta')): ?>
<li><a href="<?= Url::toRoute(['meta/index']) ?>"><?= \Yii::t('app', 'Meta fields') ?></a></li>
<?php endif ?>
