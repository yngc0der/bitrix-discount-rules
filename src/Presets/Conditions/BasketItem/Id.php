<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\BasketItem;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\IntValueShortLogic;

/**
 * Class Id
 * @package Yngc0der\DiscountRules\Presets\Conditions\BasketItem
 */
class Id extends IntValueShortLogic
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondBsktFldProduct';
    }
}
