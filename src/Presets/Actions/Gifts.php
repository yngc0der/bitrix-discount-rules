<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Actions\Gifts;

use Yngc0der\DiscountRules\Presets\BaseGroup;

/**
 * Class GiftsGroup
 * @package Yngc0der\DiscountRules\Presets\Actions\Gifts
 */
class Gifts extends BaseGroup
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'GiftCondGroup';
    }

    /**
     * GiftsGroup constructor.
     */
    public function __construct()
    {
        $this->setData('All', 'AND');
    }
}
