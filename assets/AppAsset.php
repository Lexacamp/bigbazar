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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       // "/web/public/css/bootstrap.min.css",
        "/web/public/css/font-awesome.min.css",
        "/web/public/css/prettyPhoto.css",
        "/web/public/css/price-range.css",
        "/web/public/css/animate.css",
	    "/web/public/css/main.css",
	    "/web/public/css/responsive.css",
    ];
    public $js = [

        "/web/public/js/jquery.js",
	   // "/web/public/js/bootstrap.min.js",
	    "/web/public/js/jquery.scrollUp.min.js",
	    "/web/public/js/price-range.js",
        "/web/public/js/jquery.prettyPhoto.js",
        "/web/public/js/jquery.accordion.js",
        "/web/public/js/jquery.cookie.js",
        "/web/public/js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
