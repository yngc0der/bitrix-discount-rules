<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.02.20
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\Order;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\ArrayValue;

/**
 * Class Delivery
 * @package Yngc0der\DiscountRules\Presets\Conditions\Order
 */
class Delivery extends ArrayValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondSaleDelivery';
    }
}
