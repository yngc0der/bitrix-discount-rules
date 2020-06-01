<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\BasketItem;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\FloatValue;

/**
 * Class Price
 * @package Yngc0der\DiscountRules\Presets\Conditions\BasketItem
 */
class Price extends FloatValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondBsktFldPrice';
    }
}
