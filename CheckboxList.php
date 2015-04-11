<?php

namespace evgkan\widgets;

use Yii;
use yii\helpers\Html;
use yii\widgets\InputWidget;

/**
 * Class ChekboxList
 * @package evgkan\widgets
 */
class CheckboxList extends InputWidget
{
    public $items = [];
    public $options = [];
    public $window = [
        'enable' => true,
        'height' => '200px',
        'width' => 'auto',
    ];

    public function run()
    {
        parent::run();
        $attribute = null;
        $result = Html::activeCheckboxList(
            $this->model,
            $attribute ? $attribute : $this->attribute,
            $this->items,
            $this->options
            );
        if ($this->window['enable']) {
            $result =
                '<div class="form-control"
                style="height:'.$this->window['height'].'; width:'.$this->window['width'].
                '; overflow-y:scroll">'.$result.'</div>';
        }
        return $result;
    }
}