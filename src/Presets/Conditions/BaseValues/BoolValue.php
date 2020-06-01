<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 22.12.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\BaseValues;

use Yngc0der\DiscountRules\Presets\Base as BasePreset;

/**
 * Class BoolValue
 * @package Yngc0der\DiscountRules\Presets\Conditions\BaseValues
 */
abstract class BoolValue extends BasePreset
{
    /**
     * BoolValue constructor.
     * @param bool $value
     */
    public function __construct($value)
    {
        $this->setData('value', (bool)$value ? 'Y' : 'N');
    }
}
