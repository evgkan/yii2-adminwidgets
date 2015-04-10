<?php

namespace evgkan\widgets;

use Yii;
use yii\helpers\Html;

/**
 * Class Select
 * @package asdfstudio\admin\widgets
 *
 * Renders active select widget with related models
 */
class CheckboxList extends \asdfstudio\admin\forms\widgets\Base
{
    /**
     * Items array
     * @var array
     */
    public $items = [];

    /**
     *
     * @var array
     */
    public $options =[];


    /**
     * @inheritdoc
     */
    public function renderInput($value, $attribute = null)
    {
        return Html::activeCheckboxList(
            $this->model,
            $attribute ? $attribute : $this->attribute,
            $this->items,
            $this->options
            );
    }
}
