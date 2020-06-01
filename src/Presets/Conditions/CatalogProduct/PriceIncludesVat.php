<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\CatalogProduct;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\BoolValue;

/**
 * Class PriceIncludesVat
 * @package Yngc0der\DiscountRules\Presets\Conditions\CatalogProduct
 */
class PriceIncludesVat extends BoolValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondCatVatIncluded';
    }
}
