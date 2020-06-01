<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\CatalogProduct;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\IntValue;

/**
 * Class Quantity
 * @package Yngc0der\DiscountRules\Presets\Conditions\CatalogProduct
 */
class Quantity extends IntValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondCatQuantity';
    }
}
