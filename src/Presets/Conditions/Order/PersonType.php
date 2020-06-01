<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.02.20
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\Order;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\ArrayValue;

/**
 * Class PersonType
 * @package Yngc0der\DiscountRules\Presets\Conditions\Order
 */
class PersonType extends ArrayValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondSalePersonType';
    }
}
