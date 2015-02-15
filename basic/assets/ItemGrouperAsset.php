<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Assets for the Javascript item grouper.
 */
class ItemGrouperAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'js/item_grouper.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
