<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 22.12.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\BaseValues;

use Yngc0der\DiscountRules\Presets\Base as BasePreset;

/**
 * Class IntValue
 * @package Yngc0der\DiscountRules\Presets\Conditions\BaseValues
 */
abstract class FloatValue extends BasePreset
{
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
