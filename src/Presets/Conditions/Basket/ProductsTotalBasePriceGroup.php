<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.02.20
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\Basket;

/**
 * Class ProductsTotalBasePriceGroup
 * @package Yngc0der\DiscountRules\Presets\Conditions\Basket
 */
class ProductsTotalBasePriceGroup extends ProductsTotalPriceGroup
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondBsktAmtBaseGroup';
    }
}
