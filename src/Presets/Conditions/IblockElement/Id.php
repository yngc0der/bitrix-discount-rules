<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\IblockElement;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\ArrayValue;

/**
 * Class Id
 * @package Yngc0der\DiscountRules\Presets\Conditions\IblockElement
 */
class Id extends ArrayValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondIBElement';
    }
}
