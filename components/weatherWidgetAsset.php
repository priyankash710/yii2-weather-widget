<?php
namespace app\WeatherWidgetAsset;
use yii\web\AssetBundle;

class WeatherWidgetAsset extends AssetBundle
{

    public $js = [];

    public $css = [
        'css/weatherwidget.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        // Tell AssetBundle where the assets files are
        $this->sourcePath = __DIR__ . "/assets";
        parent::init();
    }
}