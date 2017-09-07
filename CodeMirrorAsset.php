<?php

namespace ahmadasjad\CodeMirrorAsset;

use yii\web\AssetBundle;
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
}
