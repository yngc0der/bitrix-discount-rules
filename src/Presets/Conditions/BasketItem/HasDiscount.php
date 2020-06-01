<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\BasketItem;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\BoolValue;

/**
 * Class HasDiscount
 * @package Yngc0der\DiscountRules\Presets\Conditions\BasketItem
 */
class HasDiscount extends BoolValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondBsktAppliedDiscount';
    }
}
