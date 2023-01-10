<?php

namespace phuongdev89\cropper;

use Yii;
use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{

    /**
     * @param $app
     * @return void
     */
    public function bootstrap($app)
    {
        Yii::setAlias('cropper', __DIR__);
        Yii::setAlias('phuongdev89/cropper', __DIR__);
    }
}
