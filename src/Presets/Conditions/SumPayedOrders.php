<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions;

use Yngc0der\DiscountRules\Presets\BaseGroup;

/**
 * Class SumPayedOrders
 * @package Yngc0der\DiscountRules\Presets\Conditions
 */
class SumPayedOrders extends BaseGroup
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondCumulativeGroup';
    }

    /**
     * @return $this
     */
    public function allConditionsCompleted()
    {
        return $this->setData('All', 'AND');
    }

    /**
     * @return $this
     */
    public function anyConditionCompleted()
    {
        return $this->setData('All', 'OR');
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
