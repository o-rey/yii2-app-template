<?php
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="/">App Title</a>
        <button type="button" class="navbar-toggle pull-right" data-toggle="offcanvas">
            <span class="sr-only"><?= \Yii::t('app', 'Navigation') ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <?php if (!Yii::$app->user->isGuest): ?>
    <ul class="nav navbar-nav hidden-xs">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?= Yii::$app->user->identity->name ?> (<?= Yii::$app->user->identity->role ?>)
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="<?= Url::toRoute(['backend/profile']) ?>"><?= \Yii::t('app', 'Profile') ?></a></li>
                <li><a href="<?= Url::toRoute(['backend/logout']) ?>"><?= \Yii::t('app', 'Logout') ?></a></li>
            </ul>
        </li>
    </ul>
    <div class="col-sm-5 col-md-4 pull-right">
        <form class="navbar-form" role="search" action="<?= Url::toRoute(['index']) ?>">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="<?= \Yii::t('app', 'search') ?>" value="<?= Yii::$app->request->get('q', '') ?>">
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-search"></span>
                        <?= \Yii::t('app', 'Search') ?>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <?php endif ?>
</nav>
