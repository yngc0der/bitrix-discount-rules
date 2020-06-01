<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.02.20
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\Basket;

/**
 * Class ProductsGroup
 * @package Yngc0der\DiscountRules\Presets\Conditions\Basket
 */
class ProductsGroup extends SubGroupShortLogic
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondBsktProductGroup';
    }

    /**
     * @return $this
     */
    public function exists()
    {
        return $this->setData('Found', 'Found');
    }

    /**
     * @return $this
     */
    public function notExists()
    {
        return $this->setData('Found', 'NoFound');
    }
}
