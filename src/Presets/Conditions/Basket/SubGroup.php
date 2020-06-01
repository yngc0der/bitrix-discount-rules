<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\Basket;

use Yngc0der\DiscountRules\Presets\Conditions\Group;

/**
 * Class SubGroup
 * @package Yngc0der\DiscountRules\Presets\Conditions\Basket
 */
class SubGroup extends Group
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'ActSaleSubGrp';
    }
}
