<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\BasketItem;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\FloatValue;

/**
 * Class TotalWeight
 * @package Yngc0der\DiscountRules\Presets\Conditions\BasketItem
 */
class TotalWeight extends FloatValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'BX:CondBsktFldSummWeight';
    }
}
