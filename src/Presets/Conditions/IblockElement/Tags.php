<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\IblockElement;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\StringValue;

/**
 * Class Tags
 * @package Yngc0der\DiscountRules\Presets\Conditions\IblockElement
 */
class Tags extends StringValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondIBTags';
    }
}
