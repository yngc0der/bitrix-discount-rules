<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\CatalogProduct;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\IntValueShortLogic;

/**
 * Class PriceVatId
 * @package Yngc0der\DiscountRules\Presets\Conditions\CatalogProduct
 */
class PriceVatId extends IntValueShortLogic
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondCatVatID';
    }
}
