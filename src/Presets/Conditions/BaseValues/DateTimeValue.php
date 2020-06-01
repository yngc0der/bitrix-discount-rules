<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\BaseValues;

use Yngc0der\DiscountRules\Presets\Base as BasePreset;
use DateTime;

/**
 * Class DateTimeValue
 * @package Yngc0der\DiscountRules\Presets\Conditions\BaseValues
 */
abstract class DateTimeValue extends BasePreset
{
    /**
     * @param DateTime $value
     * @return $this
     */
    public function equal($value)
    {
        return $this
            ->setData('logic', 'Equal')
            ->setData('value', $value->getTimestamp());
    }

    /**
     * @param DateTime $value
     * @return $this
     */
    public function notEqual($value)
    {
        return $this
            ->setData('logic', 'Not')
            ->setData('value', $value->getTimestamp());
    }

    /**
     * @param DateTime $value
     * @param bool $strict
     * @return $this
     */
    public function great($value, $strict = true)
    {
        return $this
            ->setData('logic', $strict ? 'Great' : 'EqGr')
            ->setData('value', $value->getTimestamp());
    }

    /**
     * @param DateTime $value
     * @param bool $strict
     * @return $this
     */
    public function less($value, $strict = true)
    {
        return $this
            ->setData('logic', $strict ? 'Less' : 'EqLs')
            ->setData('value', $value->getTimestamp());
    }
}
