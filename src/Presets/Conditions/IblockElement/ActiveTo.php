<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\IblockElement;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\DateTimeValue;

/**
 * Class ActiveTo
 * @package Yngc0der\DiscountRules\Presets\Conditions\IblockElement
 */
class ActiveTo extends DateTimeValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondIBDateActiveTo';
    }
}
