<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Actions\Basket;

use Yngc0der\DiscountRules\Presets\Conditions\Group;

/**
 * Class BasketGroup
 * @package Yngc0der\DiscountRules\Presets\Actions\Basket
 */
class Basket extends Group
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'ActSaleBsktGrp';
    }

    /**
     * @param float $value
     * @param float $maxValue
     * @return $this
     */
    public function discount($value, $maxValue = 0.0)
    {
        return $this
            ->setData('Type', 'Discount')
            ->setData('Value', (float)$value)
            ->setData('Max', (float)$maxValue);
    }

    /**
     * @param float $value
     * @return $this
     */
    public function extra($value)
    {
        return $this
            ->setData('Type', 'Extra')
            ->setData('Value', (float)$value)
            ->setData('Max', 0);
    }

    /**
     * @param float $value
     * @return $this
     */
    public function fixedPrice($value)
    {

        return $this
            ->setData('Type', 'Closeout')
            ->setData('Value', (float)$value)
            ->setData('Max', 0);
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
    public function inBaseCurrencyForEach()
    {
        return $this->setData('Unit', 'CurEach');
    }

    /**
     * @return $this
     */
    public function inBaseCurrencyForAll()
    {
        return $this->setData('Unit', 'CurAll');
    }
}
