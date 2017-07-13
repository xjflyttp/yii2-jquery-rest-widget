<?php

namespace xj\js\jquery\rest;

use yii\web\AssetBundle;

class RestAsset extends AssetBundle
{

    public $sourcePath = '@bower/jquery.rest/dist';
    public $basePath = '@webroot/assets';
    public $js = ['jquery.rest.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
