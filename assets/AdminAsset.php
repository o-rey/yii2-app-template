<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;
use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';

	public $css = array(
		'css/common.css',
		'css/admin.css',
	);

	public $js = array(
		'js/common.js',
		'js/admin.js',
	);

	public $depends = array(
		'yii\web\YiiAsset',
		'yii\web\JqueryAsset',
		'yii\bootstrap\BootstrapAsset',
	);

}
