<?php

namespace ahmadasjad\CodeMirrorAsset;

use yii\web\AssetBundle;
use yii\web\View;
/**
 * Description of CodeMirrorAsset
 *
 * @author  Ahmad Asjad <ahmadcimage@gmail.com>
 */
class CodeMirrorAsset extends AssetBundle
{
    public $sourcePath = '@bower/codemirror';
    public $js = [
        'lib/codemirror.js'
    ];
    public $css = [
        'lib/codemirror.css'
    ];

    public $jsOptions = [
        'position'=>View::POS_HEAD
    ];
}
