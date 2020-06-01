<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\Gifts;

use Yngc0der\DiscountRules\Presets\Base;

/**
 * Class ProductGifts
 * @package Yngc0der\DiscountRules\Presets\Conditions\Gifts
 */
class Product extends Base
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'GifterCondIBElement';
    }

    /**
     * @return $this
     */
    public function any()
    {
        return $this->setData('Type', 'one');
    }

    /**
     * @return $this
     */
    public function all()
    {
        return $this->setData('Type', 'all');
    }

    /**
     * @param array $products_id
     * @return $this
     */
    public function from($products_id)
    {
        return $this->setData('Value', (array)$products_id);
    }
}
