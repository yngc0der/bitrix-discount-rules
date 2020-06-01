<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\CatalogProduct;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\FloatValue;

/**
 * Class Weight
 * @package Yngc0der\DiscountRules\Presets\Conditions\CatalogProduct
 */
class Weight extends FloatValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondCatWeight';
    }
}
