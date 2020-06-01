<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\CatalogProduct;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\ArrayValue;

/**
 * Class PriceTypeId
 * @package Yngc0der\DiscountRules\Presets\Conditions\CatalogProduct
 */
class PriceTypeId extends ArrayValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondCatalogPriceType';
    }
}
