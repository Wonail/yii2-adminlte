<?php

namespace wonail\adminlte\assetBundle;

use yii\web\AssetBundle;

/**
 * Select2 AssetBundle
 */
class Select2Asset extends AssetBundle
{

    public $sourcePath = '@wonail/adminlte/assets';
    public $css = [
        /**
         * 修正使用 kartik-v\yii2-widget-select2小部件时的样式问题
         */
        'css/fixSelect2.min.css',
//        'css/fixSelect2.css',
    ];
    public $depends = [
//        'wonail\adminlte\assetBundle\BaseAdminLteAsset',
    ];

}
