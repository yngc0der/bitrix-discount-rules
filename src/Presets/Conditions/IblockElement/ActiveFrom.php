<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\IblockElement;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\DateTimeValue;

/**
 * Class ActiveFrom
 * @package Yngc0der\DiscountRules\Presets\Conditions\IblockElement
 */
class ActiveFrom extends DateTimeValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondIBDateActiveFrom';
    }
}
