<?php if (\Yii::$app->session->hasFlash('success')): ?>
<div class="alert alert-success">
    <?= \Yii::$app->session->getFlash('success'); ?>
</div>
<?php endif ?>

<?php if (\Yii::$app->session->hasFlash('warning')): ?>
<div class="alert alert-warning">
    <?= \Yii::$app->session->getFlash('warning'); ?>
</div>
<?php endif ?>

<?php if (\Yii::$app->session->hasFlash('error')): ?>
<div class="alert alert-danger">
    <?= \Yii::$app->session->getFlash('error'); ?>
</div>
<?php endif ?>
