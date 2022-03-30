<?php

namespace phuong17889\cropper\assets;

use yii\web\AssetBundle;

/**
 * Widget asset bundle
 */
class CropperAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@phuong17889/cropper/web/';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/cropper.css'
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/cropper.js'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'phuong17889\cropper\assets\JcropAsset',
        'phuong17889\cropper\assets\SimpleAjaxUploaderAsset',
    ];
}
