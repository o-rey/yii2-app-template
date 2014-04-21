<?php
use yii\helpers\Html;
use yii\helpers\Url;
\app\assets\AdminAsset::register($this);

/**
 * @var $this \yii\base\View
 * @var $content string
 */
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= Html::encode($this->title); ?></title>
    <?php $this->head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <?php $this->beginBody(); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <?= $this->render('/common/_flash') ?>
                <?= $content; ?>
            </div>
        </div>
    </div>
    <?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
