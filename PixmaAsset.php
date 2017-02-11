<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link https://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 11.02.2017
 */
namespace skeeks\template\pixma;
use yii\web\AssetBundle;

class PixmaAsset extends AssetBundle
{
    public $sourcePath = '@skeeks/template/pixma/src/';
    /**
     * @param string $asset
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    static public function getAssetUrl($asset)
    {
        return \Yii::$app->assetManager->getAssetUrl(\Yii::$app->assetManager->getBundle(static::className()), $asset);
    }
}