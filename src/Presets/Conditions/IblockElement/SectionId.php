<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\IblockElement;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\IntValueShortLogic;

/**
 * Class SectionId
 * @package Yngc0der\DiscountRules\Presets\Conditions\IblockElement
 */
class SectionId extends IntValueShortLogic
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondIBSection';
    }
}
