<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 22.12.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\BaseValues;

use Yngc0der\DiscountRules\Presets\Base as BasePreset;

/**
 * Class ArrayValue
 * @package Yngc0der\DiscountRules\Presets\Conditions\BaseValues
 */
abstract class ArrayValue extends BasePreset
{
    /**
     * @param array $value
     * @return $this
     */
    public function in($value)
    {
        return $this
            ->setData('logic', 'Equal')
            ->setData('value', (array)$value);
    }

    /**
     * @param array $value
     * @return $this
     */
    public function notIn($value)
    {
        return $this
            ->setData('logic', 'Not')
            ->setData('value', (array)$value);
    }
}
