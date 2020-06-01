<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 22.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Actions;

use Yngc0der\DiscountRules\Presets\Base;

/**
 * Class Delivery
 * @package Yngc0der\DiscountRules\Presets\Actions
 */
class Delivery extends Base
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'ActSaleDelivery';
    }

    /**
     * @param float $value
     * @return $this
     */
    public function discount($value)
    {
        return $this
            ->setData('Type', 'Discount')
            ->setData('Value', (float)$value);
    }

    /**
     * @param float $value
     * @return $this
     */
    public function discountTo($value)
    {
        return $this
            ->setData('Type', 'DiscountZero')
            ->setData('Value', (float)$value);
    }

    /**
     * @param float $value
     * @return $this
     */
    public function extra($value)
    {
        return $this
            ->setData('Type', 'Extra')
            ->setData('Value', (float)$value);
    }

    /**
     * @return $this
     */
    public function inPercent()
    {
        return $this->setData('Unit', 'Perc');
    }

    /**
     * @return $this
     */
    public function inBaseCurrency()
    {
        return $this->setData('Unit', 'Cur');
    }
}
