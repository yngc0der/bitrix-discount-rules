<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.02.20
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\Order;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\FloatValue;

/**
 * Class TotalPrice
 * @package Yngc0der\DiscountRules\Presets\Conditions\Order
 */
class TotalPrice extends FloatValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondSaleOrderSumm';
    }
}
