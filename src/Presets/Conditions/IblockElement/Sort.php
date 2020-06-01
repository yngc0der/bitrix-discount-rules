<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\IblockElement;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\IntValue;

/**
 * Class Sort
 * @package Yngc0der\DiscountRules\Presets\Conditions\IblockElement
 */
class Sort extends IntValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondIBSort';
    }
}
