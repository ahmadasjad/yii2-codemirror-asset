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

    public static function register($view, $options = []) {
        $js = ['lib/codemirror.js'];
        $css = ['lib/codemirror.css'];
        if(isset($options['mode'])){
            if(!is_array($options['mode'])){
                $options['mode'] = [$options['mode']];
            }
            foreach ($options['mode'] as $key => $mode) {
                $js[] = 'mode/'.$mode.'/'.$mode.'.js';
            }
        }
        if(isset($options['addon'])){
            if(!is_array($options['addon'])){
                $options['addon'] = [$options['addon']];
            }
            foreach ($options['addon'] as $key => $addon) {
                if(substr($addon, strlen($addon)-4, 4) == '.css'){
                    $css[] = 'addon/'.$addon;
                }else{
                    $js[] = 'addon/'.$addon.'.js';
                }
            }
        }
        \Yii::$container->set('ahmadasjad\CodeMirrorAsset\CodeMirrorAsset', [
            'js'=>$js,
            'css'=>$css
        ]);
        parent::register($view);
    }
}
