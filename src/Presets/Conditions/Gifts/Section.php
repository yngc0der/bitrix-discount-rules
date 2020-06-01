<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\Gifts;

use Yngc0der\DiscountRules\Presets\Base;

/**
 * Class SectionGifts
 * @package Yngc0der\DiscountRules\Presets\Conditions\Gifts
 */
class Section extends Base
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'GifterCondIBSection';
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
     * @param int $section_id
     * @return $this
     */
    public function from($section_id)
    {
        return $this->setData('Value', (int)$section_id);
    }
}
