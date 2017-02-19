<?php
namespace app\assets;

class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    public $css = [
        'css/main.css',
    ];
    public $js = [
        'js/main.js',
        'js/bootstrap.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
