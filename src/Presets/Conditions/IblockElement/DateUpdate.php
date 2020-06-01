<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\IblockElement;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\DateTimeValue;

/**
 * Class DateUpdate
 * @package Yngc0der\DiscountRules\Presets\Conditions\IblockElement
 */
class DateUpdate extends DateTimeValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondIBTimestampX';
    }
}
