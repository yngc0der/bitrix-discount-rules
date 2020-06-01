<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 22.12.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\BaseValues;

use Yngc0der\DiscountRules\Presets\Base as BasePreset;

/**
 * Class StringValue
 * @package Yngc0der\DiscountRules\Presets\Conditions\BaseValues
 */
abstract class StringValueShortLogic extends BasePreset
{
    /**
     * @param string $value
     * @return $this
     */
    public function equal($value)
    {
        return $this
            ->setData('logic', 'Equal')
            ->setData('value', (string)$value);
    }

    /**
     * @param string $value
     * @return $this
     */
    public function notEqual($value)
    {
        return $this
            ->setData('logic', 'Not')
            ->setData('value', (string)$value);
    }
}
