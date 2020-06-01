<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 22.12.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\BaseValues;

use Yngc0der\DiscountRules\Presets\Base as BasePreset;

/**
 * Class IntValueShortLogic
 * @package Yngc0der\DiscountRules\Presets\Conditions\BaseValues
 */
abstract class IntValueShortLogic extends BasePreset
{
    /**
     * @param int $value
     * @return $this
     */
    public function equal($value)
    {
        return $this
            ->setData('logic', 'Equal')
            ->setData('value', (int)$value);
    }

    /**
     * @param int $value
     * @return $this
     */
    public function notEqual($value)
    {
        return $this
            ->setData('logic', 'Not')
            ->setData('value', (int)$value);
    }
}
