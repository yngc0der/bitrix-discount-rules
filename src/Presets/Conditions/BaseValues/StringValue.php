<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 22.12.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\BaseValues;

/**
 * Class StringValue
 * @package Yngc0der\DiscountRules\Presets\Conditions\BaseValues
 */
abstract class StringValue extends StringValueShortLogic
{
    /**
     * @param string $value
     * @return $this
     */
    public function contain($value)
    {
        return $this
            ->setData('logic', 'Contain')
            ->setData('value', (string)$value);
    }

    /**
     * @param string $value
     * @return $this
     */
    public function notContain($value)
    {
        return $this
            ->setData('logic', 'NotCont')
            ->setData('value', (string)$value);
    }
}
