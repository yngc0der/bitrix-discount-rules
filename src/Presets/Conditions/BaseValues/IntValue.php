<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 22.12.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\BaseValues;

/**
 * Class IntValue
 * @package Yngc0der\DiscountRules\Presets\Conditions\BaseValues
 */
abstract class IntValue extends IntValueShortLogic
{
    /**
     * @param int $value
     * @param bool $strict
     * @return $this
     */
    public function great($value, $strict = true)
    {
        return $this
            ->setData('logic', $strict ? 'Great' : 'EqGr')
            ->setData('value', (int)$value);
    }

    /**
     * @param int $value
     * @param bool $strict
     * @return $this
     */
    public function less($value, $strict = true)
    {
        return $this
            ->setData('logic', $strict ? 'Less' : 'EqLs')
            ->setData('value', (int)$value);
    }
}
