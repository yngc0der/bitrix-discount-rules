<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.02.20
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\LastOrder;

use Yngc0der\DiscountRules\Presets\Conditions\Order;

/**
 * Class Delivery
 * @package Yngc0der\DiscountRules\Presets\Conditions\LastOrder
 */
class Delivery extends Order\Delivery
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'Past' . parent::getClassId();
    }
}
