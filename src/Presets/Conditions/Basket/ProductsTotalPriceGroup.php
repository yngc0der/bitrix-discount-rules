<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.02.20
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\Basket;

/**
 * Class ProductsTotalPriceGroup
 * @package Yngc0der\DiscountRules\Presets\Conditions\Basket
 */
class ProductsTotalPriceGroup extends SubGroupShortLogic
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondBsktAmtGroup';
    }

    /**
     * @param float $value
     * @return $this
     */
    public function equal($value)
    {
        return $this
            ->setData('logic', 'Equal')
            ->setData('value', (float)$value);
    }

    /**
     * @param float $value
     * @return $this
     */
    public function notEqual($value)
    {
        return $this
            ->setData('logic', 'Not')
            ->setData('value', (float)$value);
    }

    /**
     * @param float $value
     * @param bool $strict
     * @return $this
     */
    public function great($value, $strict = true)
    {
        return $this
            ->setData('logic', $strict ? 'Great' : 'EqGr')
            ->setData('value', (float)$value);
    }

    /**
     * @param float $value
     * @param bool $strict
     * @return $this
     */
    public function less($value, $strict = true)
    {
        return $this
            ->setData('logic', $strict ? 'Less' : 'EqLs')
            ->setData('value', (float)$value);
    }
}
